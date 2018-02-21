<html>
    <head>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="http://127.0.0.1:8000/css/materialize.min.css"  media="screen,projection"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
        <nav>
            <div class="nav-wrapper">
                <a href="http://127.0.0.1:8000/admin" class="brand-logo">Home</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="http://127.0.0.1:8000/admin/users-list">Users List</a></li>
                    <li><a href="http://127.0.0.1:8000/admin/admins-list">Admins List</a></li>
                </ul>
            </div>
        </nav>

        @yield('content')

        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="{{asset('js/materialize.min.js')}}"></script>
    </body>
</html>