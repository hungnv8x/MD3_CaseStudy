<?php

namespace App\Http\Controllers;

use App\Services\PostService;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public $postService;
    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    public function getAll()
    {
        $posts = $this->postService->getAll();
        return view('backend.post.list',compact('posts'));
    }

    public function deleteById($id)
    {
        $this->postService->deleteById($id);
        return redirect()->back();
    }
}
