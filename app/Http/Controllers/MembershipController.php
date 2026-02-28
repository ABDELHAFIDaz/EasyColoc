<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MembershipController extends Controller
{
    public function overview()
    {
        return view('member.overview');
    }

    public function balances()
    {
        return view('member.balaces');
    }


    public function members()
    {
        return view('member.members');
    }


    public function expenses()
    {
        return view('member.expenses');
    }
}
