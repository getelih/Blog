<?php 

namespace App\Models;

class Post extends Model {
    public static $table = 'posts';

    public $id;
    public $title;
    public $body;
    public $image;
    public $user_id;
}