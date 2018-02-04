<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;

class UserController extends Controller
{
    public function index(User $user)
    {
      return view('users.index', compact('user'));
    }
}
