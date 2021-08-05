<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item d-none d-sm-inline-block">
            <a href="javascript:void(0)" onclick="document.querySelector('#logout-form').submit()" class="nav-link">Logout</a>
            <form id="logout-form" action="{{route('logout')}}" method="POST">
                @csrf
            </form>
        </li>
    </ul>
</nav>
<!-- /.navbar -->