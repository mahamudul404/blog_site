<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class UserController extends Controller
{
    public function index(Request $request)
    {
        if ($request->user()->usertype == 'user') {
            return redirect()->route('dashboard');
        }
        else {
            return view('admin.dashboard');
        }
    }

    public function home(Request $request)
    {
        if ($request->user()->usertype == 'admin') {
            return redirect()->route('admin.dashboard');
        }
    }
}
