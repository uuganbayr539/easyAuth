<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function index()
    {
        $users = User::all(); // Retrieve all users from the database
        return view('admin.index', ['users' => $users]);
    }
}
