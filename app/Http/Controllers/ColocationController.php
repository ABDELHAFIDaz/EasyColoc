<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Colocation;

class ColocationController extends Controller
{
    public function show(Colocation $colocation)
    {
        $owner = $colocation->memberships()->where('is_owner', true)->get();
        $activeMembers = $colocation->memberships()->whereNull('left_at')->get();

        return view('member.members', compact('owner', 'activeMembers'));
    }

    public function createColocation() {}

    public function joinColocation() {}

    public function DeleteColocation() {}
}
