<?php 

namespace App\Controllers;

use App\Models\Post;
use App\Models\User;

class PublicController {
    public function index() {
        $posts = Post::all();
        view('index', compact('posts'));
    }

    public function us() {
        $posts = Post::all();
        view('us', compact('posts'));
    }

    public function tech() {
        $posts = Post::all();
        view('tech', compact('posts'));
    }

    public function form(){
        
        $name = $_GET['name'] ?? '';
        view('form', compact('name'));
    }

    public function answer(){
        dump($_POST);
        dump($_GET);
    }
}