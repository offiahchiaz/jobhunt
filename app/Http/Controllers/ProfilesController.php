<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('applicants.home');
    }

    public function show(User $user)
    {
        return view('applicants.user_details', compact('user'));
    }

    public function edit(User $user)
    {
        return view('applicants.profile_form', compact('user'));
    }
}