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

                        <div class="columns">
                            <div class="column">
                                <div class="columns">
                                    <div class="column">
                                    <label class="label" >Grade</label>
                                    </div>
                                    <div class="column">
                                        <div class="field has-centered">
                                            <div class="select is-success is-full is-7">
                                                <select name="grade">                                      
                                                        <option value="6">Grade 6</option>
                                                        <option value="7">Grade 7</option>
                                                        <option value="8">Grade 8</option>
                                                        <option value="9">Grade 9</option>
                                                        <option value="10">Grade 10</option>
                                                        <option value="11">Grade 11</option>
                                                        <hr class="dropdown-divider">
                                                        <option value="12">Grade 12</option>
                                                        <option value="13">Grade 13</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="column">
                            </div>
                        </div>
                        
                        <div class="columns">
                            <div class="column">
                                    <div class="columns">
                                        <div class="column">
                                        <label class="label" >Medium</label>
                                        </div>
                                        <div class="column">
                                            <div class="field has-centered">
                                                <div class="select is-primary is-full is-7">
                                                    <select name="medium">                                       
                                                        <option value="Sinhala">Sinhala</option>
                                                        <option value="English">English</option>
                                                        <option value="Tamil">Tamil</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div>

                                <div class="column">
                                </div>
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
                    <li>Use Institute's Youtube Channel Id as as Youtube Channel Id - UCWoZo56B35bhorR-ZLuLmlQ</li>
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