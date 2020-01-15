<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/custom.css">
    <title>more information</title>
    @include('heads.heads')
</head>
<body>
    <div class="container">
        <div class="columns">
            <div class="my-5"></div>
            <div class="column is-5"></div>
            <div class=" moreinfoimg column is-4 ">
                    <figure class="image is-128x128 text-center">
                            <img class="is-rounded is-responsive" style="margin-left: 25%" src="/default.jpg" >
                    </figure><br>
                    <button class="button is-success">Email Here</button>
                    <button class="button is-black">Call Here</button>
            </div>

        </div>
        <hr class="hrline">
        <div class="subtitle has-text-weight-semibold">
             Student Details
        </div>
        <div class="detailscolumn">
                <p>Subject:&nbsp;&nbsp;&nbsp;&nbsp;<span class="has-text-weight-semibold">{{$StudentPost->subject}}</span></p><br>
                <p>Medium:&nbsp;&nbsp;&nbsp;&nbsp;<span class="has-text-weight-semibold">{{$StudentPost->language}}</span></p><br>
                <p>Stream:&nbsp;&nbsp;&nbsp;&nbsp;<span class="has-text-weight-semibold">{{$StudentPost->student->stream}}</span></p><br>
                <p>Province: <span class="has-text-weight-semibold">{{$StudentPost->province}}</span></p><br>
                <p>PostalCode: <span class="has-text-weight-semibold">{{$StudentPost->postalCode}}</span></p><br>
                <p>District:<span class="has-text-weight-semibold">{{$StudentPost->district}}</span></p><br>
                <p>ContactNumber:<span class="has-text-weight-semibold">{{$StudentPost->contactNumber}}</span></p><br>
                <p>Email<span class="has-text-weight-semibold">{{$StudentPost->email}}</span></p><br>
                <p>Class needed :<span class="has-text-weight-semibold">
                    @if ($StudentPost->monday == 1)
                        {{__('Monday, ')}}
                    @endif
                    @if ($StudentPost->tuesday == 1)
                        {{__('Tuesday, ')}}
                    @endif
                    @if ($StudentPost->wednesday == 1)
                        {{__('Wednesday, ')}}
                    @endif
                    @if ($StudentPost->thursday == 1)
                        {{__('Thursday, ')}}
                    @endif
                    @if ($StudentPost->friday == 1)
                        {{__('Friday, ')}}
                    @endif
                    @if ($StudentPost->saturday == 1)
                        {{__('Saturday, ')}}
                    @endif
                    @if ($StudentPost->sunday == 1)
                        {{__('Sunday')}}
                    @endif  
                </span></p><br>
                <p>Class needed Time :<span class="has-text-weight-semibold">
                    @if($StudentPost->morning == 1)
                    {{__('Morning, ')}}
                    @endif
                    @if($StudentPost->afternoon == 1)
                    {{__('Afternoon, ')}}
                    @endif
                    @if($StudentPost->evening == 1)
                    {{__('Evening, ')}}
                    @endif
                    @if($StudentPost->night == 1)
                    {{__('Night, ')}}
                    @endif
                   
                
                </span></p><br>
        </div>
        <hr class="hrline">
        <div class="subtitle has-text-weight-semibold">
            Discription
        </div>
        <p><span>{{$StudentPost->discription}}</span></p>

        <hr class="hrline">
        <div class="subtitle has-text-weight-semibold">
            Contact Student
        </div>
        <div class="contactform">
            <div class="columns">
                <div class="column is-2"></div>
                <div class="column is-7">
                    <div class="filed">
                        <label class="label">Name</label>
                        <input class="input "type="text" placeholder="Enter Your Name">
                    </div>
                    <div class="field">
                            <label class="label">Email</label>
                            <div class="control has-icons-left has-icons-right">
                                <input class="input is-danger" type="email" placeholder="Email">
                                <span class="icon is-small is-left">
                                    <i class="fas fa-envelope"></i>
                                 </span>
                                <span class="icon is-small is-right">
                                 <i class="fas fa-exclamation-triangle"></i>
                                </span>
                            </div>
                                <p class="help is-danger">This email is invalid</p>
                    </div>
                    <div class="filed">
                        <label class="label">Phone Number</label>
                        <input class="input "type="text" placeholder="Enter Your Phone Number">
                        <p class="help is-danger">This Number is invalid</p>
                    </div>
                    <div class="filed">
                        <label class="label">Subject</label>
                        <input class="input "type="text" placeholder="Enter Your Name">
                    </div>
                    <div class="field">
                        <label class="label">Message</label>
                        <div class="control">
                          <textarea class="textarea" placeholder="Textarea"></textarea>
                        </div>
                    </div><br>
                    <div class="butttongroup">
                        <div class="button is-success">Submit</div>
                        <div class="button is-black">Cancel</div>
                    </div>
                </div>

            </div>
        </div>


    </div>
</body>
</html>