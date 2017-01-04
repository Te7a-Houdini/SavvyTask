@extends('layouts.homeLayout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel panel-default">
                    <!-- Default panel contents -->
                    <div class="panel-heading">Categories</div>

                <table class="table">
                    <tr>
                        <th>Name</th>
                    </tr>

                    @foreach($categories as $category)
                        <tr>
                            <td>
                         <a href="{{route('home.category',$category->id)}}">{{$category->name}}</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
