<?php

namespace App\Services;

use App\Repositories\PostRepository;

class PostService
{
    public $postRepository;
    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function getAll()
    {
       return $this->postRepository->getAll();
    }

    public function deleteById($id)
    {
        $this->postRepository->deleteById($id);
    }
}
