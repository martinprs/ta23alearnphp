<?php

namespace App\Controllers;

use App\Models\User;

class UsersController
{
    public function __construct()
    {
       if(!auth()){
        redirect('/login');
        die;
       }
    }

    public function index()
    {
       $users = User::all();
       view('users/index', compact('users'));
    }

    public function store()
    {
        if(empty($_POST['email']) || empty($_POST['password'])){
            return redirect('/users');
        }

        $exists = User::where('email', $_POST['email'])[0] ?? null;
        if($exists){
            return redirect('/users');
        }

        $user = new User();
        $user->email = $_POST['email'];
        $user->password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $user->save();
        redirect('/users');
    }

    public function view()
    {
        $user = User::find($_GET['id']);
        view('users/view', compact('user'));
    }

    public function edit()
    {
        $user = User::find($_GET['id']);
        view('users/edit', compact('user'));
    }

    public function update()
    {
        $user = User::find($_GET['id']);
        $user->email = $_POST['email'];
        $user->save();
        redirect('/users');
    }

    public function destroy()
    {
        $user = User::find($_GET['id']);
        if($user && $user->id != ($_SESSION['userID'] ?? null)){
            $user->delete();
        }
        redirect('/users');
    }
}
