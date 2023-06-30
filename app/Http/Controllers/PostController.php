<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Services\PostService;

class PostController extends Controller
{
    protected $postservice;

    public function __construct(PostService $postservice)
    {
        $this->postservice = $postservice;
    }

    public function index()
    {
        $post = $this->postservice->getAllPosts();

        dd($post->toArray()); 

        return view('posts.index',['posts'=>$post]);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        $post = $this->postservice->getPost($id);
        dd($post->toArray());
    }


    public function edit(post $post)
    {
        //
    }


    public function update(Request $request, post $post)
    {
        //
    }


    public function destroy(post $post)
    {
        //
    }
}
