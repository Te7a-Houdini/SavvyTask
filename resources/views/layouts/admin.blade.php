@include('layouts.partials._header')


<body class="skin-blue sidebar-mini">
<div class="wrapper">


    <!-- Main Header -->
    <header class="main-header">

        <!-- Logo -->
        <a href="{{ route('user.index') }}" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>S</b>T</span>
            <!-- logo for regular state and mobile devices -->
              <span class="logo-lg"><b> {{ config('app.name', 'Laravel') }}</b></span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">


                    <!-- User Account Menu -->
                    <li class="dropdown user user-menu">
                        <!-- Menu Toggle Button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <!-- The user image in the navbar-->
                            <img src="/images/users/default.jpg" class="user-image" alt="User Image">
                            <!-- hidden-xs hides the username on small devices so only the image appears. -->
                            <span class="hidden-xs"> {{ Auth::user()->fullName()}}</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- The user image in the menu -->
                            <li class="user-header">
                                <img src="/images/users/default.jpg" class="img-circle" alt="User Image">

                                <p>
                                    {{ Auth::user()->fullName() }}

                                </p>
                            </li>
                            <!-- Menu Body -->
                            <li class="user-body">


                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="{{route('user.edit',Auth::user()->id)}}" class="btn btn-default btn-flat">Edit Profile</a>
                                </div>
                                <div class="pull-right">
                                    <a href="{{ url('/logout') }}"
                                       class="btn btn-default btn-flat"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

            <!-- Sidebar user panel (optional) -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="/images/users/default.jpg" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p> {{ Auth::user()->fullName()}}</p>

                </div>
            </div>



            <!-- Sidebar Menu -->
            <ul class="sidebar-menu">
                <li class="header">Controls</li>
                <!-- Optionally, you can add icons to the links -->
                <li ><a href="{{route('user.index')}}"><i class="fa fa-link"></i> <span>Users</span></a></li>
                <li><a href="{{route('category.index')}}"><i class="fa fa-link"></i> <span>Categories</span></a></li>
                <li><a href="#"><i class="fa fa-link"></i> <span>Another Link</span></a></li>

            </ul>
            <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">

            @yield('content')

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer">

        <!-- Default to the left -->
        <strong>Copyright &copy; {{date('Y')}} <a href="#">Savvy</a>.</strong> All rights reserved.
    </footer>


    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
</body>
  @include('layouts.partials._footer')