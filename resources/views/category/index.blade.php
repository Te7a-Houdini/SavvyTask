@extends('layouts.admin')


@section('content')

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"><a href="{{route('category.create')}}" class="btn btn-success">Create</a></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                                    <thead>
                                    <tr role="row">
                                        <th>Slug</th>
                                        <th>English Name</th>
                                        <th>Arabic Name</th>
                                        <th>Created At</th>
                                        <th>View</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($categories as $categoryObj)

                                        <tr role="row" >
                                            <td>{{$categoryObj->slug}}</td>
                                            <td>{{$categoryObj->translate('en')->name}}</td>
                                            <td>{{$categoryObj->translate('ar')->name}}</td>
                                            <td>{{$categoryObj->created_at}}</td>
                                            <td><a class="btn btn-sm btn-primary" href="{{route('category.show',$categoryObj->id)}}">View</a></td>
                                            <td><a class="btn btn-sm btn-default" href="{{route('category.edit',$categoryObj->id)}}">Edit</a></td>
                                            <td>
                                                <form action="{{route('category.destroy',$categoryObj->id)}}" method="post">
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

                                {{ $categories->links() }}
                            </div></div></div>
                </div>
                <!-- /.box-body -->
            </div>

        </div>
        <!-- /.col -->
    </div>

@endsection