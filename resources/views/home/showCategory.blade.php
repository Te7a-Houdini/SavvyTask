@extends('layouts.homeLayout')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel panel-default">
                        <!-- Default panel contents -->
                        <div class="panel-heading">Posts</div>

                        <table class="table">
                            <tr>
                                <th>title</th>
                                <th>description</th>
                                <th>read more</th>
                            </tr>

                            @foreach($posts as $post)
                                <tr>
                                    <td>

                                        {{$post->title}}
                                    </td>

                                    <td>
                                        <?php
                                        $pieces = explode(" ",  $post->description);
                                        $unCompletedDesc = implode(" ", array_splice($pieces, 0, 10));
                                        ?>
                                        {{ $unCompletedDesc    }}
                                    </td>
                                    <td>
                                        <a href="{{route('home.readMore',$post->id)}}" class="btn btn-sm btn-primary"> Read More</a>
                                    </td>
                                </tr>
                            @endforeach
                            {{$posts->links()}}
                        </table>
                    </div>
                </div>
            </div>
        </div>
@endsection