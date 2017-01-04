@extends('layouts.admin')

@section('content')

    <body class="skin-blue sidebar-mini">

    <div class="row">
        <div class="col-md-12">
            <div class="box box-widget widget-user-2">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header bg-yellow">
                    <div class="widget-user-image">
                        <img class="img-circle" src="{{$post->image_url}}" alt="User Avatar">

                    </div>
                    <!-- /.widget-user-image -->
                    <h3 class="widget-user-username">Category :-  {{$post->category->slug}}</h3>
                </div>
                <div class="box-footer no-padding">
                    <ul class="nav nav-stacked">
                        <li><a href="#">English Title <span class="pull-right badge bg-blue">{{$post->translate('en')->title}}</span></a></li>
                        <li><a href="#">Arabic Title <span class="pull-right badge bg-aqua">{{$post->translate('ar')->title}}</span></a></li>
                        <li><a href="#">English Description <span class="pull-right badge bg-blue">{{$post->translate('en')->description}}</span></a></li>
                        <li><a href="#">Arabic Description <span class="pull-right badge bg-blue">{{$post->translate('ar')->description}}</span></a></li>
                        <li><a href="#">Created At <span class="pull-right badge bg-red">{{$post->created_at}}</span></a></li>
                    </ul>
                </div>
            </div>

        </div>

    </div>
    </body>



@endsection