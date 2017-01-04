@extends('layouts.admin')

@section('content')

    <body class="skin-blue sidebar-mini">

    <div class="row">
        <div class="col-md-12">
            <div class="box box-widget widget-user-2">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header bg-yellow">
                    <div class="widget-user-image">
                     </div>
                    <!-- /.widget-user-image -->
                    <h3 class="widget-user-username">{{$category->slug}}</h3>
                </div>
                <div class="box-footer no-padding">
                    <ul class="nav nav-stacked">
                        <li><a href="#">English Name <span class="pull-right badge bg-blue">{{$category->translate('en')->name}}</span></a></li>
                        <li><a href="#">Arabic Name <span class="pull-right badge bg-aqua">{{$category->translate('ar')->name}}</span></a></li>
                         <li><a href="#">Created At <span class="pull-right badge bg-red">{{$category->created_at}}</span></a></li>
                    </ul>
                </div>
            </div>

        </div>

    </div>
    </body>



@endsection