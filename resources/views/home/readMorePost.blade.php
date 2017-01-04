@extends('layouts.homeLayout')

@section('content')
<div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
            <img src="{{$post->image_url}}" alt="Test">
            <div class="caption">
                <h3>{{$post->title}}</h3>
                <p>{{$post->description}}</p>
             </div>
        </div>
    </div>
</div>

@endsection