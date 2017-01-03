@extends('layouts.admin')

@section('content')

    <body class="skin-blue sidebar-mini">

    <div class="row">
        <div class="col-md-12">
            <div class="box box-widget widget-user-2">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header bg-yellow">
                    <div class="widget-user-image">
                        <img class="img-circle" src="/images/users/default.jpg" alt="User Avatar">
                    </div>
                    <!-- /.widget-user-image -->
                    <h3 class="widget-user-username">{{Auth::user()->fullName()}}</h3>
                </div>
                <div class="box-footer no-padding">
                    <ul class="nav nav-stacked">
                        <li><a href="#">First Name <span class="pull-right badge bg-blue">{{$user->first_name}}</span></a></li>
                        <li><a href="#">Last Name <span class="pull-right badge bg-aqua">{{$user->last_name}}</span></a></li>
                        <li><a href="#">Email<span class="pull-right badge bg-green">{{$user->email}}</span></a></li>
                        <li><a href="#">Created At <span class="pull-right badge bg-red">{{$user->created_at}}</span></a></li>
                    </ul>
                </div>
            </div>

        </div>

    </div>
    </body>



@endsection