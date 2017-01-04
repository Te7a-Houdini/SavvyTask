@extends('layouts.admin')


@section('content')

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"><a href="{{route('post.create')}}" class="btn btn-success">Create</a></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                                    <thead>
                                    <tr role="row">
                                        <th>English Title</th>
                                        <th>Arabic Title</th>
                                        <th>English Description</th>
                                        <th>Arabic Description</th>
                                        <th>Created At</th>
                                        <th>View</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($posts as $postObj)

                                        <tr role="row" >
                                            <td>{{$postObj->translate('en')->title}}</td>
                                            <td>{{$postObj->translate('ar')->title}}</td>
                                            <td>{{$postObj->translate('en')->description}}</td>
                                            <td>{{$postObj->translate('ar')->description}}</td>
                                            <td>{{$postObj->created_at}}</td>
                                            <td><a class="btn btn-sm btn-primary" href="{{route('post.show',$postObj->id)}}">View</a></td>
                                            <td><a class="btn btn-sm btn-default" href="{{route('post.edit',$postObj->id)}}">Edit</a></td>
                                            <td>
                                                <form action="{{route('category.destroy',$postObj->id)}}" method="post">
                                                    {{csrf_field()}}
                                                    {{method_field('DELETE')}}
                                                    <input class="btn btn-sm btn-danger" type="submit" value="delete" >
                                                </form>

                                            </td>
                                        </tr>
                                    @endforeach

                                    </tbody>

                                </table>


                            </div></div><div class="row">
                            <div class="col-sm-7">

                                {{ $posts->links() }}
                            </div></div></div>
                </div>
                <!-- /.box-body -->
            </div>

        </div>
        <!-- /.col -->
    </div>

@endsection