<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function create() 
    {
        $email = 'henryleeworld@gmail.com';
        User::create([
            'name'       => 'henrylee',
            'first_name' => 'Henry',
            'last_name'  => 'Lee',
            'email'      => $email,
            'password'   => Hash::make('password'),
        ]);
        $user = User::where('email', '=', $email)->firstOrFail();
        echo '名字：' . $user->first_name . PHP_EOL;
        echo '姓氏：' . $user->last_name . PHP_EOL;
    }
}
