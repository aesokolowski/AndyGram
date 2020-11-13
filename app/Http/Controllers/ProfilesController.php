<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index($user_index)
    {
        $user = User::findOrFail($user_index);
   
        return view('home', [
            'user' => $user
        ]);
    }
}
