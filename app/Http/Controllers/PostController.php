<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;

class PostController extends Controller
{
    public function index(Request $request) {
        $posts = User::find($request->user()->id)->posts;

        //dd($posts[0]['title']);
        return view('user.index', compact('posts'));
    }

    public function post() {
        return view('user.post');
    }

    public function putPost(Request $request) {

        $this->validate( $request, [
            'title' => 'required|max:50',
            'body' => 'required'
        ]);

        $post = new Post();

        $post->title = $request->title;
        $post->body = $request->body;
        $post->author_id = $request->user()->id;
        $post->save();

        return redirect()->route('index');
    }

    public function editPost($id, Request $request) {

        $this->validate( $request, [
            'title' => 'required|max:50',
            'body' => 'required',
            'score' => 'integer|required|between:0,100',
        ]);

        $post = Post::find($id);

        $post->title = $request->title;
        $post->body = $request->body;
        $post->score = $request->score;
        $post->checked = $request->checked ? true : false;
        $post->save();

        return redirect()->route('posts');
    }

    public function deletePost($id) {

        $post = Post::find($id)->delete();

        return redirect()->route('posts');
    }
}
