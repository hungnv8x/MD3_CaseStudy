@extends('backend.dashboard')
@section('title','User Update')
@section('content')
    <div class="container mt-3">
        <form action="{{route('users.update',$user->id)}}" method="post">
            @csrf
            <div class="card-style mb-30" style="width: 500px">
                <div class="input-style-1">
                    <label>Name</label>
                    <input type="text" name="name" value="{{$user->name}}" />
                </div>
                <div class="input-style-1">
                    <label>Email</label>
                    <input type="text" name="email"  value="{{$user->email}}"/>
                </div>
                <div class="input-style-1">
                    <label>Role</label>
                    <select name="role" style="width: 80px">
                        @foreach($roles as $role)
                        <option  {{$user->role->id == $role->id ? 'selected':''}} value="{{$role->id}}">{{$role->name}}</option>
                        @endforeach
                    </select>
                </div>
                <button  class="btn btn-success" style="width: 80px">Update</button>
                <a href="{{route('users.list')}}" type="button" class="btn btn-success" style="width: 80px">Back</a>
            </div>
        </form>
    </div>

@endsection
