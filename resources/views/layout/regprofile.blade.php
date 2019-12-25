<!DOCTYPE html>
<html lang="en">
<head>
     @include('heads.heads')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/custom.css">
    <title>Register profile</title>
    <style>
        .foter{
            margin-top: 20%;
        }
    </style>
</head>
<body>
  @include('heads.navibar')
    <div class="container" >
      <div class="signinprofile">
        <div class="row ">
            <div class="col-md-2">
                
          </div>
          <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                        <img src="images/student.png" class="card-img-top" alt="...">
                        <div class="card-body">  
                          <a href="/register/student" class="button is-success">I'm Student</a>
                        </div>
                      </div>
          </div>
          <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                        <img src="images/teacher.png" class="card-img-top" alt="...">
                        <div class="card-body">
                          <a href="/register/teacher" class="button is-success">I'm Teacher</a>                                                                 
                        </div>
                      </div>
          </div>
          <div class="col-md-2">
              
        </div>
        </div>

      </div>
      </div>
      <div class="my-5"></div>      
      <div class="foter" >
        @include('heads.footer')
      </div>
</body>

</html>