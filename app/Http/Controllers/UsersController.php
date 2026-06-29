<?php

namespace App\Http\Controllers;

use App\Models\User;

class UsersController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create() 
    {
        $email = 'henryleeworld@gmail.com';
        User::create([
            'name'       => 'henrylee',
            'first_name' => __('Henry'),
            'last_name'  => __('Lee'),
            'email'      => $email,
            'password'   => 'password',
        ]);
        $user = User::where('email', '=', $email)->firstOrFail();
        echo __('The first name: ') . $user->first_name . PHP_EOL;
        echo __('The last name is: ') . $user->last_name . PHP_EOL;
    }
}
