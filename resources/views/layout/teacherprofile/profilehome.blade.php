<!DOCTYPE html>
<html lang="en">
<head>
    @include('heads.heads')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">\
    <link rel="stylesheet" href="/css/custom.css">
    <title>Profile Home</title>
    <style>
      .footer{
        margin-top: 20%;
      }
    </style>
</head>
<body>
    <div class="columns panelboard">
      <div class="column is-one-fifth sidebar">
          <figure class="image is-128x128 profileimage">
            <img class="is-rounded " src="https://bulma.io/images/placeholders/128x128.png">
          </figure>
            <aside class="menu " >
                <p class="menu-label">
                  General
                </p>
                <ul class="menu-list">
                  <li><a href="/myprofile">My Profile</a></li>
                  <li><a href="/myads">My Advertisement</a></li>                  
                  <li><a>My Inbox</a></li>
                  
                </ul>
                <p class="menu-label">
                  Administration
                </p>
                <ul class="menu-list">
                  <li><a href="/editprofile">Edit Account</a></li>
                  <li><a href="/changepassword">Change Password</a></li>
                  <li><a>Delete Account</a></li>                     
                </ul>
                <p class="menu-label">
                  Other
                </p>
                <ul class="menu-list">
                  <li><a>LogOut</a></li>
                </ul>
          </aside>
                          

       </div>
       @if(Request::is('myprofile'))
          @include('layout.teacherprofile.myprofile')
        @elseif(Request::is('editprofile'))
           @include('layout.teacherprofile.editprofile')
        @elseif(Request::is('changepassword'))
           @include('layout.teacherprofile.changepassword')
        @elseif(Request::is('myads'))
           @include('layout.teacherprofile.treadadvertisment')
       @else
      @endif    

    </div>
              


    </div>
    @include('heads.footer')


    <script src="/js/jquery-3.3.1.min.js"></script>
    <script src="/js/fontawesome.js"></script>
    <script src="/js/bootstrap.js"></script>
</body>
</html>