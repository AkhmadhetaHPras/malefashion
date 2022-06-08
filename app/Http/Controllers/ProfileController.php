<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = User::with('address')
            ->find(Auth()->user()->id);
        return view('profile', ['title' => 'Profile', 'profile' => $profile]);
    }

    public function fetch()
    {
        $profile = User::with('address')
            ->find(Auth()->user()->id);
        return response()->json([
            'profile' => $profile,
        ]);
    }
}
