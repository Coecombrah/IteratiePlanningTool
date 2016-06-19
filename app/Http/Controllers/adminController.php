<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class adminController extends Controller
{
//    public function index()
//    {
//        @if (isset(Auth::user->id(1))
//        $watisadmin = Task::orderBy('created_at', 'asc')->get();
//        return view('users', ['users' => $adminaccount]);
//    }

    public function index()
    {
        return view('adminroles');
    }
}