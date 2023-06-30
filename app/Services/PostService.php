<?php
namespace App\Services;
use App\Models\Post;

class PostService{
    public function getAllPosts(){

        return Post::published(false)->get();
    }

    public function getPost($id)
    {
        return Post::whereId($id)->first();
    }
}


?>