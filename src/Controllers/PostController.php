<?php 

namespace App\Controllers;

use App\Models\Post;

class PostController {
    public function index() {
        $posts = Post::all();
        view('posts/index', compact('posts'));
    }

    public function create() {
        if (!isset($_SESSION['userId'])) {
            redirect('/login');
        }
        view('posts/create');
    }

    public function store() {
        if (!isset($_SESSION['userId'])) {
            redirect('/login');
        }

        $post = new Post();
        $post->title = $_POST['title'];
        $post->body = $_POST['body'];
        $post->user_id = $_SESSION['userId']; // Lisa sisse logitud kasutaja ID

        if (isset($_FILES['image'])) {
            do {
                $extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
                $filename = md5(microtime() . rand(0, PHP_INT_MAX) . $_FILES['image']['name']) . ".$extension";
            } while (file_exists(__DIR__ . '/../../public/uploads/' . $filename));
            move_uploaded_file($_FILES['image']['tmp_name'], __DIR__ . '/../../public/uploads/' . $filename);
            $post->image = "/uploads/$filename";
        }

        $post->save();
        redirect('/admin/posts');
    }

    public function show() {
        $post = Post::find($_GET['id']);
        if (!$post) {
            http_response_code(404);
            echo '404 page not found';
            exit;
        }
        view('posts/show', compact('post'));
    }

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

    public function update() {
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

        $post->title = $_POST['title'];
        $post->body = $_POST['body'];
        $post->save();
        redirect('/admin/posts');
    }

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
        redirect('/admin/posts');
    }
}
