<?php

namespace App\Controllers;

use App\Core\App;

class UsersController
{
    /**
     * Download page.
     */
    public function index()
    {
        return view('/registration');
    }

    /**
     * Check email.
     */
    public function check()
    {
        $users = App::get('database')->selectAll('users');
        foreach ($users as $user) {
            if ($user->email === trim($_COOKIE["_x_email"], '"')) {
                $filtered = true;
                break;
            } else {
                $filtered = false;
            }
        }
        if ($filtered) {
            echo '<div id="emailError" hx-post="registration/checkSubmit" hx-trigger="load" hx-sync="closest form:abort" hx-target="#submit" hx-swap="outerHTML" class="pl-0.5 text-red-600">email address already exists</div>';
        } else {
            echo '<div id="emailError" hx-post="registration/checkSubmit" hx-trigger="load" hx-sync="closest form:abort" hx-target="#submit" hx-swap="outerHTML" class="pl-0.5 text-gray-300">this email is available</div>';
        }
    }

    /**
     * Button disabled.
     */
    public function checkSubmit()
    {
        $users = App::get('database')->selectAll('users');
        foreach ($users as $user) {
            if ($user->email === trim($_COOKIE["_x_email"], '"')) {
                $filtered = true;
                break;
            } else {
                $filtered = false;
            }
        }
        if ($filtered) {
            echo '<button type="submit" name="submit" id="submit" class="bg-gray-600 rounded-md py-2 px-8 my-auto ml-5 text-white" disabled>Submit</button>';
        } else {
            echo '<button type="submit" name="submit" id="submit" class="bg-red-600 rounded-md py-2 px-8 my-auto ml-5 text-white hover:bg-red-800 hover:shadow-lg hover:shadow-red-800/50">Submit</button>';
        }
    }

    /**
     * Add a new user in the database.
     */
    public function addUser()
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
