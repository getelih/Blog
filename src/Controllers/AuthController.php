<?php 

namespace App\Controllers;

use App\Models\User;

class AuthController {
    public function loginForm(){
        view('auth/login');
    }

    public function login(){
        $user = User::where('email', $_POST['email'])[0] ?? null;
        if($user && password_verify(md5($_POST['email']) . $_POST['password'] . 'EwYdOCfDMlaAVcqIkLFQnUGoTvBWemjJ', $user->password)){
            $_SESSION['userId'] = $user->id;
            redirect('/');
        } else {
            redirect('/login');
        }
    }


    public function registerForm(){
        view('auth/register');
    }

    public function register(){
        $user = User::where('email', $_POST['email'])[0] ?? null;
        if($_POST['password'] !== $_POST['password_confirm']){
            redirect('/register');
        } else if ($user){
            redirect('/register');
        } else {
            $user = new User();
            $user->name = $_POST['name'];
            $user->email = $_POST['email'];
            $user->password = password_hash(md5($_POST['email']) . $_POST['password'] . 'EwYdOCfDMlaAVcqIkLFQnUGoTvBWemjJ', PASSWORD_BCRYPT);
            $user->save();
            redirect('/login');
        }
    }
    
    public function logout(){
        unset($_SESSION['userId']);
        redirect('/');
    }
}