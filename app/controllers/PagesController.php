<?php

namespace App\Controllers;

use App\Core\App;

class PagesController
{
    /**
     * Show the home page.
     */
    public function home()
    {
        $users = App::get('database')->selectAll('users');

        return view('/speakers', compact('users'));
    }
}
