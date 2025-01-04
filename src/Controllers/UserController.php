<?php

namespace App\Controllers;

use App\Models\Post;

class UserController {
    // Näitab kõiki postitusi
    public function index() {
        $posts = Post::all();
        view('posts/index', compact('posts'));
    }

    // Näitab kasutaja enda postitusi
    public function myPosts() {
        if (!isset($_SESSION['userId'])) {
            redirect('/login');
        }
        $userId = $_SESSION['userId'];
        $posts = Post::where('user_id', $userId);
        view('posts/users', compact('posts'));
    }

    // Muuda postitust
    public function edit() {
        if (!isset($_SESSION['userId'])) {
            redirect('/login');
        }

        $post = Post::find($_GET['id']);

        if (!$post) {
            http_response_code(404);
            echo '404 page not found';
            exit;
        }

        if ($post->user_id != $_SESSION['userId']) {
            http_response_code(403);
            echo 'Forbidden';
            exit;
        }

        view('posts/edit', compact('post'));
    }

    // Kustuta postitus
    public function destroy() {
        if (!isset($_SESSION['userId'])) {
            redirect('/login');
        }

        $post = Post::find($_GET['id']);

        if (!$post) {
            http_response_code(404);
            echo '404 page not found';
            exit;
        }

        if ($post->user_id != $_SESSION['userId']) {
            http_response_code(403);
            echo 'Forbidden';
            exit;
        }

        $post->delete();
        redirect('/user/posts');
    }
}
