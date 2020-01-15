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
        <div class="my-5"></div>
        <div class="columns">
            <div class="column is-5"></div>
            <div class=" moreinfoimg column is-4 ">
                <figure class="image is-128x128 ">
                    <img class="is-rounded infoimage" src="/uploads/img/{{$TeacherPost->images}}">
                </figure><br>
                <div class="my-5"></div>
                    <button class="button is-success">Email Here</button>
                    <button class="button is-black">Call Here</button>
            </div>
            <div class="column is-3">
                
                   
            </div>
        </div>
        <hr class="hrline">
        <div class="subtitle has-text-weight-semibold">
              Teacher Details
        </div>
        <div class="columns">
            <div class="column is-6">
                <div class="detailscolumn">
                        <p>Subject:&nbsp;&nbsp;&nbsp;&nbsp;<span class="has-text-weight-semibold">{{$TeacherPost->subject}}</span></p>
                        <p>Stream:&nbsp;&nbsp;&nbsp;&nbsp;<span class="has-text-weight-semibold">{{$TeacherPost->teacher->stream}}</span></p>
                        <p>Medium:&nbsp;&nbsp;&nbsp;&nbsp;<span class="has-text-weight-semibold">{{$TeacherPost->language}}</span></p>
                        <p>Institude: <span class="has-text-weight-semibold">{{$TeacherPost->institude}}</span></p>
                        <p>Province: <span class="has-text-weight-semibold">{{$TeacherPost->province}}</span></p>
                        <p>PostalCode: <span class="has-text-weight-semibold">{{$TeacherPost->postalCode}}</span></p>
                        <p>District:<span class="has-text-weight-semibold">{{$TeacherPost->district}}</span></p>
                        <p>ContactNumber:<span class="has-text-weight-semibold">{{$TeacherPost->contactNumber}}</span></p>
                        <p>Email<span class="has-text-weight-semibold">{{$TeacherPost->email}}</span></p>
                </div>
            </div>
                <div class="column is-6">
                    <div class="detail">
                        <p>Subject:&nbsp;&nbsp;&nbsp;&nbsp;<span class="has-text-weight-semibold">{{$TeacherPost->subject}}</span></p>
                        <p>Medium:&nbsp;&nbsp;&nbsp;&nbsp;<span class="has-text-weight-semibold">{{$TeacherPost->language}}</span></p>
                        <p>Institude: <span class="has-text-weight-semibold">{{$TeacherPost->institude}}</span></p>
                        <p>Province: <span class="has-text-weight-semibold">{{$TeacherPost->province}}</span></p>
                        <p>PostalCode: <span class="has-text-weight-semibold">{{$TeacherPost->postalCode}}</span></p>
                        <p>District:<span class="has-text-weight-semibold">{{$TeacherPost->district}}</span></p>
                        <p>ContactNumber:<span class="has-text-weight-semibold">{{$TeacherPost->contactNumber}}</span></p>
                        <p>Email<span class="has-text-weight-semibold">{{$TeacherPost->email}}</span></p>
                    </div>

                </div>
        </div>
        <hr class="hrline">
        <div class="subtitle has-text-weight-semibold">
            Discription
        </div>
        <p><span>{{$TeacherPost->discription}}</span></p>

        <hr class="hrline">
        <div class="subtitle has-text-weight-semibold">
            Contact Teacher
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