<nav>
    <div class="nav-wrapper">
        <ul id="nav-mobile" class="left hide-on-med-and-down">
            <li>
                <ul id="slide-out" class="side-nav">
                    <li><a href="{{ url('admin/menus') }}">Menus</a></li>
                </ul>
                <a data-activates="slide-out" class="button"><i class="material-icons">menu</i></a>
                <script>$(".button").sideNav();</script>
            </li>
            <li><a href="{{ url('admin') }}" class="brand-logo">Home</a></li>
        </ul>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="{{ url('admin/users-list') }}">Users List</a></li>
            <li><a href="{{ url('admin/admins-list') }}">Admins List</a></li>
        </ul>
    </div>
</nav>
