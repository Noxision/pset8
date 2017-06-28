<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        return view('admin.index');
    }

    public function editUsers() {
        return view('admin.editUsers');
    }

    public function editPosts() {
        return view('admin.editPosts');
    }
}
