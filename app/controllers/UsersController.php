<?php

namespace App\Controllers;

use App\Core\App;

class UsersController
{
    /**
     * Show all users.
     */
    public function index()
    {
        $users = App::get('database')->selectAll('users');

        return view('/registration', compact('users'));
    }

    /**
     * Store a new user in the database.
     */
    public function store()
    {
        App::get('database')->insert('users', [
            'firstName' => $_POST['firstName'],
            'lastName' => $_POST['lastName'],
            'phone' => $_POST['phone'],
            'email' => $_POST['email'],
            'country' => $_POST['country'],
            'photo' => file_get_contents($_FILES['photo']['tmp_name']),
            'title' => $_POST['title'],
            'description' => $_POST['description'],
            'date' => $_POST['date']
        ]);

        return redirect('registration');
    }
}
