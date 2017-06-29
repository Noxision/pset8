<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;

class AdminController extends Controller
{
    public function index() {
        return view('admin.index');
    }

    public function editUsers() {
        $users = User::all()->where('role', '=', '0');

        return view('admin.users', compact('users'));
    }

    public function editPosts() {
        $posts = Post::all();

        foreach ($posts as $post) {
            $post->author = $post->author->name;
        }

        return view('admin.posts', compact('posts'));
    }

    public function updatePost($id) {
        $post = Post::find($id);
        return view('admin.postFormUpdate', compact('post'));
    }

    public function updateUser($id) {
        $user = User::find($id);

        return view('admin.userFormUpdate', compact('user'));
    }

    public function deleteUser($id) {
        $post = User::find($id)->delete();

        return redirect()->route('users');
    }

    public function editUser($id, Request $request) {

        $this->validate( $request, [
            'name' => 'required',
            'email' => 'email|required',
            'password' => 'required|min:6',
        ]);

        $user = User::find($id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->banned = $request->banned ? true : false;
        $user->role = $request->role ? true : false;
        $user->save();

        return redirect()->route('users');
    }
}
