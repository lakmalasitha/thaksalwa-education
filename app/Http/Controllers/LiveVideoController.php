<?php

use  alchemyguy\YoutubeLaravelApi\AuthenticateService;
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\LiveSessionData;
use Illuminate\Support\Facades\Auth;
use App\LiveVideo\Comment;
use Redirect;
use Session;
use View;
use Log;
use DB;

class LiveVideoController extends Controller
{
    public $dataNew;
    private $channelId;
    private $channel_id;
    private $data_to_display = array();
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();
            $teacherId = $user->id;
            dd($teacherId);
  
    }
    
    public function teacherGoLive()
    {
        return view('liveStream.teacherGoVideo');
    }

    public function getLoggedUser(){
        $user = auth()->user();
        $user_email = $user->email;
        return $user_email;
    }

    public function getUserID(){
        $user_email = $this->getLoggedUser();
        $role = DB::table('users')->select('role') ->where('email','=', $user_email)->first();
        $user_role = $role->role;
        // dd($user_role);
        if($user_role=="student"){
            $user_id = 1;
        }elseif($user_role=="teacher"){
            $user_id = 2;
        }
        return $user_id;
    }

    public function teacherRedirectYoutube(Request $request){ 
        $role_id = $this->getUserID();
        $channel_id = $request->input('channelId');
        // if($role_id == 2){
            $user = auth()->user();
            $teacherId = $user->id;
            LiveSessionData::create([
                'teacher_id' => $teacherId,
                'channel_id' => $request->input('channelId'),
                'subject_name' => $request->input('subjectName'),
                'grade' => $request->input('grade'),
                'stream' => $request->input('stream'),
                'medium' => $request->input('medium'),
               
            ]);

            $url="https://www.youtube.com/channel/".$channel_id;
            return Redirect::to($url);
        // }else{
        //     echo "Something Wrong";
        // } 
    }

    public function getStudentData(){
        $logged_student_id = auth()->user()->id;
        $studentData = DB::table('students')->select('user_id','stream','medium')->where('user_id','=', $logged_student_id)->first();
        $student_id = $studentData->user_id;
        $stream = $studentData->stream;
        $medium = $studentData->medium;
        $studentDataDB = array($student_id, $stream, $medium);
        return $studentDataDB;
    }

    public function getLiveSessionData(){
        $student_data = $this->getStudentData();
        $logged_student_stream = $student_data[1];
        $logged_student_medium= $student_data[2];

        $sessionData = DB::table('live_session_data')->select('teacher_id','subject_name','grade','stream','medium')
        ->where('stream','=',$logged_student_stream)->first();

        $subject_nameDB = $sessionData->subject_name;
        $gradeDB = $sessionData->grade;
        $teacherIdDB = $sessionData->teacher_id;
        $streamDB = $sessionData->stream;
        $mediumDB = $sessionData->medium;

        $dbData = array($subject_nameDB, $gradeDB, $teacherIdDB, $streamDB, $mediumDB);
        return $dbData;
       
    }

    public function getPaymetVerification(){
       $user_email = $this->getLoggedUser();
        $b = DB::table('payments')->select('payment_status','payer_email') ->where('payer_email','=', $user_email)->first();
        $pay_status = $b->payment_status;
        return $pay_status;
    }

    public function studentCredentialVerify(){
        $logged_student_id = auth()->user()->id;
        $live_session_data = $this->getLiveSessionData();
        $subject_nameDB = $live_session_data[0];
        $gradeDB = $live_session_data[1];
        $teacherIdDB = $live_session_data[2];
        $streamDB = $live_session_data[3];
        $mediumDB = $live_session_data[4];

        $student_data = $this->getStudentData();
        $student_id = $student_data[0];
        $stream = $student_data[1];
        $medium = $student_data[2];

        if($logged_student_id == $student_id && $streamDB == $stream && $mediumDB == $medium){
             $active_status = 1;
        }else{
             $active_status = 0;
        }
        return $active_status;
    }

    public function getVideo(){
        $logged_student_id = auth()->user()->id;
        $live_session_data = $this->getLiveSessionData();
        $data_to_display = $live_session_data;
        $active_status = $this->studentCredentialVerify();
        $logged_student_id = auth()->user()->id;
        $student_data = $this->getStudentData();
        $student_id = $student_data[0];
    
        $pay_satus = $this->getPaymetVerification();
        $API_URL = 'https://www.googleapis.com/youtube/v3/';
        $API_KEY = 'AIzaSyColal1eRl5zI1f35h_Z5-EZZVvON_gHL8';

        $channelId = 'UCWoZo56B35bhorR-ZLuLmlQ';

        $parameter = [
            'id' => $channelId,
            'part' => 'contentDetails',
            'key' => $API_KEY,
        ];
        
        $channel_url = $API_URL.'channels?'.http_build_query($parameter);
        $json_details = json_decode(file_get_contents($channel_url),true);
        $playlist = $json_details['items'][0]['contentDetails']['relatedPlaylists']['uploads'];
         
        $parameter = [
            'part' => 'snippet',
            'playlistId' => $playlist,
            'maxresults' =>'50',
            'key' =>$API_KEY

        ];
        $channel_url = $API_URL.'playlistItems?'.http_build_query($parameter);
        $json_details = json_decode(file_get_contents($channel_url),true);

        $my_videos = [];
        foreach($json_details['items'] as $video){

            $my_videos[] = array('v_id'=>$video['snippet']['resourceId']['videoId'],
            'v_name'=>$video['snippet']['title']
        );
    
    }
    while(isset($json_details['nextPageToken'])){
        $nxt_page_url = $channel_url.'&pageToken='.$json_details['nextPageToken'];
        $json_details = json_decode(file_get_contents($nxt_page_url),true);
        foreach($json_details['items'] as $video){
            $my_videos[] = $video['snippet']['resourceId']['videoId'];
            $my_videos = collect($my_videos)->chunk(5);
        }
    }
    if($pay_satus == "succeed" && $logged_student_id == $student_id){
       
        return view('liveStream.youtube')->with(['video'=>$my_videos,'session_data' => $data_to_display]);  
    }else{
        return redirect()->back();
    }
    }

    public function Complaint(Request $request){
        $logged_student_id = Auth::id();
        $live_session_data = $this->getLiveSessionData();
        $subject_nameDB = $live_session_data[0];
        Comment::create([
            'name' => $subject_nameDB,
            'comment' => $request->input('comment'),
            'user_id' => $logged_student_id,
        ]);
        return redirect()->back()->with('message', 'Your Complaint Made Successfully!');
    }

}