@extends('backend.dashboard')
@section('title','user list')
@section('content')

<div class="tables-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <div class="card-style mb-30">
                <h3 class="mb-10">Post List</h3>
                <div class="table-wrapper table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th><h6>STT</h6></th>
                            <th><h6>Title</h6></th>
                            <th><h6>Content</h6></th>
                            <th><h6>Author</h6></th>
                            <th><h6>Category</h6></th>
                            <th><h6>Action</h6></th>
                        </tr>
                        <!-- end table row-->
                        </thead>
                        <tbody>
                        @foreach($posts as $key => $post)
                        <tr>
                            <td class="min-width">
                                <div class="lead">
                                    <div class="lead-text">
                                        <p>{{$key +1}}</p>
                                    </div>
                                </div>
                            </td>
                            <td class="min-width" style="width: 180px">
                                <p>{{$post->title}}</p>
                            </td>
                            <td class="min-width" style="width: 400px">
                                <p>{{$post->content}}</p>
                            </td>
                            <td class="min-width">
                                <p>{{$post->user->name}}</p>
                            </td>
                            <td class="min-width">
                                <p>{{$post->category->name}}</p>
                            </td>
                            <td>
                                <div class="action">
                                    <a onclick="return confirm('Are you sure?')" class="text-danger" href="{{route('posts.delete',$post->id)}}">
                                        <i class="lni lni-trash-can">Delete</i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{$posts->links()}}
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
