<!DOCTYPE html>
<html lang="en">
<head>
	@include('heads.heads')
	<title>Education Supporting System</title>
    <link rel="stylesheet" href="/css/custom.css">
    <!-- <script src="{{ asset('js/liveVideo.js') }}" defer></script> -->

    @push('head')
        <script src="{{ asset('js/videomain.js')}}"></script>
    @endpush
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/liveVideo.js') }}"></script>
</head>
<body>

@include('heads.outernavibar')
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif

<div class="container">
    <div class="row">
        <div class="col">
            <h5>Live Now</h5><hr>
                <iframe id ="my_player" type="text/html" width="440" height="360" src="https://www.youtube.com/embed/live_stream?channel=UCWoZo56B35bhorR-ZLuLmlQ" 
                    frameborder="0" &modestbranding=1 allowfullscreen></iframe>

                <p class="">Subject Name:{{$session_data[0]}}</p>
                <p class="">Grade:{{$session_data[1]}}</p>
                <p class="">Stream:{{$session_data[2]}}</p>
                <p class="">Medium:{{$session_data[3]}}</p>
               <hr></hr>

               <u>Make a Complaint</u>

               <form method="GET" action="{{ route('complaint') }}" >
                    @csrf
               <textarea class="textarea" placeholder="e.g. Hello world" name="comment"></textarea>     
               <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link">Submit Complaint</button>
                    </div>
                    <div class="control">
                        <button class="button is-link is-light">Cancel</button>
                    </div>
                </div>
                </form>
        </div>

       

        <div class="col">
             <h5>Previous Videos By Teacher</h5><hr>
                    @foreach($video as $videos)
                        <h5>Video Name:{{$videos['v_name']}}</h5>
                        <div id="my_player">
                            <iframe id="my_player" type="text/html" width="440" height="360"
                            src="https://www.youtube.com/embed/{{$videos['v_id']}}?autoplay=1&rel=0&modestbranding=1 "
                            frameborder="0" &modestbranding=1 allowfullscreen></iframe>
                        </div>
                    @endforeach
        </div>

        <div class="col">
            <h4>Live Stream Schedule</h4><hr>
            <p>Subject Name: Sinhala</p>
            <p>Grade: 12</p>
            <p>Stream: Ordianry Level</p>
            <p>Medium: Sinhala</p>
            <p>Day: Monday</p>
            <p>Time: 18.00-19.00 STD</p>
        </div>
    </div>
</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{asset('js/videomain.js') }}">
  
</script> 

            @include('heads.footer')
</div>


    
</body>
<script src="js/liveVideo.js"></script>
</html>




