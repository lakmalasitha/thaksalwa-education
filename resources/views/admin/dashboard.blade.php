<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <!-- Bulma Version 0.8.x-->
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.8.0/css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="/css/admin.css">
</head>

<body>

    <!-- START NAV -->
    <nav class="navbar is-white">
        <div class="container">
            <div class="navbar-brand">
                <a class="navbar-item brand-text" href="/">Home</a>
                <div class="navbar-burger burger" data-target="navMenu">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div id="navMenu" class="navbar-menu">
                <div class="navbar-start">
                    <a class="navbar-item" href="admin.html">Admin</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- END NAV -->
    <div class="container">
        <div class="columns">
            <div class="column is-3 ">
                <aside class="menu is-hidden-mobile">
                    <!--
                    <p class="menu-label">General</p>
                    <ul class="menu-list">
                        <li><a class="is-active">Dashboard</a></li>
                        <li><a>Message</a></li>
                        <li><a>Other</a></li>
                    </ul>
                    -->
                    <p class="menu-label">Administration</p>
                    <ul class="menu-list">
                        <!--<li><a>Edit Profile</a></li>-->
                        {{-- <li>
                            <a></a>
                            <ul>
                                <li><a>Members</a></li>
                                <li><a>Plugins</a></li>
                                <li><a>Add a member</a></li>
                                <li><a>Remove a member</a></li>
                            </ul>
                        </li> --}}
                        <!--<li><a>Change Password</a></li>-->
                        <li><a href="/teacherManage">Manage Teachers</a></li>
                        <li><a href="/studentManage">Manage Students</a></li>
                    </ul>
                    <!--
                    <p class="menu-label"> Transactions</p>
                    <ul class="menu-list">
                        <li><a>Payments</a></li>
                        <li><a>Transfers</a></li>
                        <li><a>Balance</a></li>
                        <li><a>Reports</a></li>
                    </ul>
                    -->
                </aside>
            </div>
            <div class="column is-9">
                {{-- <nav class="breadcrumb" aria-label="breadcrumbs">
                    <ul>
                        <li><a href="../">Bulma</a></li>
                        <li><a href="../">Templates</a></li>
                        <li><a href="../">Examples</a></li>
                        <li class="is-active"><a href="#" aria-current="page">Admin</a></li>
                    </ul>
                </nav> --}}
                <section class="hero is-info welcome is-small">
                    <div class="hero-body">
                        <div class="container">
                            <h1 class="title">
                                Hello, Admin.
                            </h1>
                            <h2 class="subtitle">
                                I hope you are having a great day!
                            </h2>
                        </div>
                    </div>
                </section>
                <section class="info-tiles">
                    <div class="tile is-ancestor has-text-centered">
                        <div class="tile is-parent">
                            <article class="tile is-child box">
                                <p class="title">{{count($complains)}}</p>
                                <p class="subtitle">Complains</p>
                                <a href="/viewComplains"><button class="button is-success">View Complains</button></a>
                            </article>
                        </div>
                        <div class="tile is-parent">
                            <article class="tile is-child box">
                                <p class="title">{{count($Students)}}</p>
                                <p class="subtitle">Students</p>
                                <a href="/studentManage"><button class="button is-success">Students</button></a>
                            </article>
                        </div>
                        <div class="tile is-parent">
                            <article class="tile is-child box">
                                <p class="title">{{count($Teachers)}}</p>
                                <p class="subtitle">Teachers</p>
                                <a href="/teacherManage"><button class="button is-success">Teachers</button></a>
                            </article>
                        </div>
                        <!--
                        <div class="tile is-parent">
                            <article class="tile is-child box">
                                <p class="title">19</p>
                                <p class="subtitle">Feedbacks</p>
                            </article>
                        </div>
                        -->
                    </div>
                </section>
            </div>
        </div>
        
    </div>
    
    <script async type="text/javascript" src="../js/bulma.js"></script>
</body>

</html>

          