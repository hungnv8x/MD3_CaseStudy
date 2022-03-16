@extends('backend.dashboard')
@section('title','user list')
@section('content')

<div class="tables-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <div class="card-style mb-30">
                <h3 class="mb-10">User List</h3>
                <a href="" type="button" class="btn btn-success">Create user</a>
                <div class="table-wrapper table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th><h6>STT</h6></th>
                            <th><h6>Name</h6></th>
                            <th><h6>Email</h6></th>
                            <th><h6>Role</h6></th>
                            <th><h6>Action</h6></th>
                        </tr>
                        <!-- end table row-->
                        </thead>
                        <tbody>
                        @foreach($users as $key => $user)
                        <tr>
                            <td class="min-width">
                                <div class="lead">
                                    <div class="lead-text">
                                        <p>{{$key +1}}</p>
                                    </div>
                                </div>
                            </td>
                            <td class="min-width">
                                <p>{{$user->name}}</p>
                            </td>
                            <td class="min-width">
                                <p>{{$user->email}}</p>
                            </td>
                            <td class="min-width">
                                <p>{{$user->role->name}}</p>
                            </td>
                            <td>
                                <div class="action">
                                    <a href="{{route('users.edit',$user->id)}}" class="text-success" >
                                        <i class="lni lni-write" >Edit</i>
                                        </a>|
                                    <a onclick="return confirm('Are you sure?')" class="text-danger" href="{{route('users.delete',$user->id)}}">
                                        <i class="lni lni-trash-can">Delete</i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{$users->links()}}
                    <!-- end table -->
                </div>
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
</div>

@endsection
