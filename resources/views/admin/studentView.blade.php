<!DOCTYPE html>
<html lang="en">
<head>
    @include('heads.heads')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Management</title>

    <style>
        .bd-placeholder-img {
          font-size: 1.125rem;
          text-anchor: middle;
          -webkit-user-select: none;
          -moz-user-select: none;
          -ms-user-select: none;
          user-select: none;
        }
        @media (min-width: 768px) {
          .bd-placeholder-img-lg {
            font-size: 3.5rem;
          }
        }
      </style>
</head>
<body>
<div class="column displaybox">
    <nav class="breadcrumb has-arrow-separator has-background-white" aria-label="breadcrumbs">
      <ul>
        <li><a href="/adminlogin"><- Admin Panel</a></li>
        <li class="is-active"><a href="/profile">Student Management</a></li>
      </ul>
    </nav>
    <div class="columns is-mobile is-centered">
        <div class="column is-half">
            {{-- @include('layouts.errors')  --}}
            @if(session()->has('errormsg'))
            <div class="notification is-danger">
                <button class="delete"></button>
                <h1 class="is-size-7"><b> {{ session()->get('errormsg') }}</b></h1>
            </div>
            @endif
            @if(session()->has('warningmsg'))
            <div class="notification is-warning">
                <button class="delete"></button>
                <h1 class="is-size-7"><b> {{ session()->get('warningmsg') }}</b></h1>
            </div>
            @endif
            @if(session()->has('success'))
            <div class="notification is-success">
                <button class="delete"></button>
                <h1 class="is-size-7"><b> {{ session()->get('success') }}</b></h1>
            </div>
            @endif
        </div>
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                (document.querySelectorAll('.notification .delete') || []).forEach(($delete) => {
                    $notification = $delete.parentNode;
                    $delete.addEventListener('click', () => {
                        $notification.parentNode.removeChild($notification);
                    });
                });
            });
        </script>
    </div>
</div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <center>
                <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4" width="100%">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                      <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" onclick="document.getElementById('Add_student').style.display='inline';document.getElementById('remove_students').style.display='none';">Register Student</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" onclick="document.getElementById('remove_students').style.display='inline';document.getElementById('Add_student').style.display='none';">Remove Student</a>
                          </li>
                      </ul>
                    </div>
                  </nav>
                </center>
            </div>
        </div>

        <!-- Add student -->
            <div id="Add_student">
                <form method="POST" action='/registerStudent' enctype="multipart/form-data">
                    @csrf
                    <input type="text" name="type" value="student" hidden>
                    <div class="field">
                        <p class="control has-icons-left">
                            <input
                                class="input {{ $errors->has('name') ? ' is-danger' : '' }} is-success inputline is-medium"
                                id="name" type="text" value="{{ old('name') }}" name="name" placeholder="Name"
                                autofocus>
                            <span class="icon is-small is-left">
                                <i class="fas fa-user"></i>
                            </span> @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong class="has-text-danger">{{ $errors->first('name') }}</strong>
                            </span> @endif
                        </p>
                    </div>
                    <div class="field">
                                <input type="text" value="student" name="role" hidden>
                        </div>
                        <div class="my-4"></div>
                    <div class="columns">
                        <div class="column">
                            <div class="columns">
                                <div class="column">
                                <label for="">Stream</label>
                                </div>
                                <div class="column">
                                    <div class="field has-centered">
                                        <div class="select is-success is-full is-7">
                                            <select name="stream">                                       
                                                <option value="OL">O/L</option>
                                                <option value="AL">A/L</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="columns">
                                <div class="column">
                                <label for="" class="has-text-success">Medium</label>
                                </div>
                                <div class="column">
                                    <div class="field has-centered">
                                        <div class="select is-success is-full is-7">
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
                    </div>
                    <div class="field">
                            <p class="control has-icons-left has-icons-right">
                                <input
                                    class="input {{ $errors->has('email') ? ' is-danger' : '' }} is-success inputline is-medium"
                                    id="email" type="email" value="{{ old('email') }}" name="email"
                                    placeholder="Email Address" autofocus>
                                <span class="icon is-small is-left">
                                    <i class="fas fa-envelope"></i>
                                </span> @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong class="has-text-danger">{{ $errors->first('email') }}</strong>
                                </span> @endif
                            </p>
                        </div>
                    <div class="field">
                        <p class="control has-icons-left">
                            <input
                                class="input {{ $errors->has('password') ? ' is-danger' : '' }} is-success inputline is-medium"
                                id="password" type="password" name="password" placeholder="Password" required>
                            <span class="icon is-small is-left">
                                <i class="fas fa-lock"></i>
                            </span>
                            @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong class="has-text-danger">{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </p>
                    </div>

                    <div class="field">
                        <p class="control has-icons-left">
                            <input id="password-confirm" type="password" class="input is-success inputline is-medium"
                                name="password_confirmation" placeholder="Confirm Password" required>
                            <span class="icon is-small is-left">
                                <i class="fas fa-lock"></i>
                            </span>
                        </p>
                    </div>
                    {{-- <div class="field">
                            <div class="file has-name">
                                <label class="file-label">
                                <input class="file-input image"  id="image" type="file" name="image" class="is-medium">
                                <span class="file-cta">
                                    <span class="file-icon">
                                        <i class="fas fa-upload"></i>
                                    </span>
                                        <span class="file-label">
                                        Profile Picture
                                    </span>
                                </span>
                                @if ($errors->has('image'))
                                <span class="invalid-feedback" role="alert">
                                    <strong class="has-text-danger">{{ $errors->first('image') }}</strong>
                    </span>
                    @endif
                    </div>
                    </div> --}}
                    <br>
                    {{-- <div class="field googlerecapture">
                        <p>
                            @if(env('GOOGLE_RECAPTCHA_KEY'))
                            <div class="g-recaptcha googlerecaptcha" id="googlerecaptcha"
                                data-sitekey="{{env('GOOGLE_RECAPTCHA_KEY')}}">
                    </div>
                    @endif
                    @if ($errors->has('googlerecaptcha'))
                    <span class="invalid-feedback" role="alert">
                    <strong class="has-text-danger">{{ $errors->first('googlerecaptcha') }}</strong>
                    </span>
                    @endif
                    </p>
                    </div> --}}
                    <div class="field ">
                    <p class="control has-text-centered is-centered loginbutton">
                        <button type="submit" class="button is-success is full is-uppercase">
                            &nbsp; &nbsp; &nbsp; &nbsp; Sign Up &nbsp; &nbsp; &nbsp; &nbsp;
                        </button>
                    </p>
                    </div>
                    <input type="hidden" name="recaptcha" id="recaptcha">
                </form>
            </div>
        <!-- end of add student-->


        <!-- Remove students -->
        <div id="remove_students" style="display:none">
            <div class="row">
                <div class="col-md-12">
                    @if (count($students)>0)
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Student name</th>
                            <th scope="col">Student email</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody style="text-align: center">
                            @foreach ($students as $student)
                                <tr style="text-align: center">
                                <td style="text-align: center">{{$student->id}}</td>
                                <td style="text-align: center">{{$student->name}}</td>
                                <td style="text-align: center">{{$student->email}}</td>
                                <center>
                                    <td>
                                        <center>
                                            <form action="/delete/deletestudent/{{$student->id}}" method="post">
                                                @csrf
                                                <input type="hidden" name="id" value="{{$student->id}}">
                                                <button class="button is-danger" style="width:100%" onclick="return confirm('Are you sure?')" type="submit">Remove Student</button>
                                            </form>
                                            <a href="/studentsProfile/{{$student->id}}"><button class="button is-success" style="width:100%">View profile</button></a>
                                        </center>
                                    </td>
                                </center>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @else 
                    <p>No students available</p>
                    @endif
                </div>
            </div>
        </div>
        <!--End of Remove students -->


    </div>
    <div>
        
    </div>
    <script src="/js/jquery-3.3.1.min.js"></script>
    <script src="/js/fontawesome.js"></script>
    <script src="/js/bootstrap.js"></script>
</body>
</html>