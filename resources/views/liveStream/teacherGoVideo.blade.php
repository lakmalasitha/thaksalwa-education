<!DOCTYPE html>
<html lang="en">
<head>
    @include('heads.heads')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Go Live</title>
</head>
<body>

    @include('heads.navibar')

<div class="container">
    <div class="row">
        <div class="col-8">
                <form action="/teacher_redirect_youtube" method="GET">
                    @csrf
                    {{ method_field('PUT') }}
                    <u>Enter Live Session Information</u>
                        <div class="field">
                                <label class="label" >Suject</label>
                                    <div class="control">
                                        <input class="input" type="text" name="subjectName">
                                    </div>
                                    @if ($errors->has('name'))
                                    <span>
                                        <strong class="has-text-danger">{{ $errors->first('name') }}</strong>
                                    </span> @endif
                        </div>

                        <div class="field">
                                <label class="label" >Grade</label>
                                    <div class="control">
                                        <input class="input" type="text" name="grade">
                                    </div>
                                    @if ($errors->has('name'))
                                    <span>
                                        <strong class="has-text-danger">{{ $errors->first('name') }}</strong>
                                    </span> @endif
                        </div>

                        <div class="field">
                                <label class="label" >Stream-OL/AL</label>
                                    <div class="control">
                                        <input class="input" type="text" name="stream">
                                    </div>
                                    @if ($errors->has('name'))
                                    <span>
                                        <strong class="has-text-danger">{{ $errors->first('name') }}</strong>
                                    </span> @endif
                        </div>

                        <div class="field">
                                <label class="label" >Medium-Sinhala/English</label>
                                    <div class="control">
                                        <input class="input" type="text" name="medium">
                                    </div>
                                    @if ($errors->has('name'))
                                    <span>
                                        <strong class="has-text-danger">{{ $errors->first('name') }}</strong>
                                    </span> @endif    
                        </div>
                        
                        <div class="field">
                                <label class="label" >Youtube Channel Id</label>
                                    <div class="control">
                                        <input class="input" type="text" name="channelId">
                                    </div>
                                    @if ($errors->has('name'))
                                    <span>
                                        <strong class="has-text-danger">{{ $errors->first('name') }}</strong>
                                    </span> @endif
                        </div>

                        <div class="field is-grouped">
                            <div class="control">
                                <button class="button is-success">Go Live</button>
                            </div>
                            <div class="control">
                                <button class="button is-link is-success">Cancel</button>
                            </div>
                        </div>
                </form>
        </div>

        <div class="col-4">
            <u>Special Reminder to Redirect into Youtube Live</u>
                <ul style="list-style-type:square;">
                    <li>Add Your Own Youtube Channel Id in Channel Id Field</li>
                    <li>Live Video Title Convention in Youtube- Subject name/Grade/Medium</li>
                </ul>
        </div>
    </div>
</div>
        @include('heads.footer')


        
    <script src="/js/jquery-3.3.1.min.js"></script>
    <script src="/js/fontawesome.js"></script>
</body>
</html>