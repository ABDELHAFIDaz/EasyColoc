<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function stats()
    {
        return view('admin.stats');
    }

    public function apartments()
    {
        return view('admin.apartments');
    }


    public function showUsers()
    {
        return view('admin.users');
    }


    public function bannedUsers()
    {
        return view('admin.banned');
    }
}
