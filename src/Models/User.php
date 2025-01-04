<?php 

namespace App\Models;

class User extends Model {
    public static $table = 'users';

    public $id;
    public $name;
    public $email;
    public $password;
}