<!DOCTYPE html>
<html lang="en">
<head>
    @include('heads.heads')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">\
    <link rel="stylesheet" href="/css/custom.css">
    <title>Profile Home</title>
</head>
<body>
    <div class="columns panelboard">
        <div class="column is-4">
                <figure class="image is-128x128">
                        <img class="is-rounded is-centered" src="https://bulma.io/images/placeholders/128x128.png">
                      </figure>
                <aside class="menu " >
                        <p class="menu-label">
                          General
                        </p>
                        <ul class="menu-list">
                          <li><a>Dashboard</a></li>
                          <li><a>My Inbox</a></li>
                          <li><a>My Advertisement</a></li>
                        </ul>
                        <p class="menu-label">
                          Administration
                        </p>
                        <ul class="menu-list">
                          <li><a>Edit Account</a></li>
                          <li><a>Change Password</a></li>
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

    </div>
</body>
</html>