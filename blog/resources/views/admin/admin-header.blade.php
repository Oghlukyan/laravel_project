 <nav>
    <div class="nav-wrapper">
        <a href="{{ url('admin') }}" class="brand-logo">Home</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="{{ url('admin/users-list') }}">Users List</a></li>
            <li><a href="{{ url('admin/admins-list') }}">Admins List</a></li>
        </ul>
    </div>
</nav>
