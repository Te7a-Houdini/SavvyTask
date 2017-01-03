@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"><a href="{{route('register')}}" class="btn btn-success">Create</a></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                                    <thead>
                                    <tr role="row">
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>Created At</th>
                                        <th>View</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($users as $userObj)

                                    <tr role="row" >
                                        <td>{{$userObj->first_name}}</td>
                                        <td>{{$userObj->last_name}}</td>
                                        <td>{{$userObj->email}}</td>
                                        <td>{{$userObj->created_at}}</td>
                                        <td><a href="{{route('user.show',$userObj->id)}}">View</a></td>
                                        <td><a href="#">Edit</a></td>
                                        <td><a href="#">Delete</a></td>
                                    </tr>
                                        @endforeach

                                    </tbody>

                                </table>


                            </div></div><div class="row">
                            <div class="col-sm-7">

                                {{ $users->links() }}
                            </div></div></div>
                </div>
                <!-- /.box-body -->
            </div>

        </div>
        <!-- /.col -->
    </div>
@endsection