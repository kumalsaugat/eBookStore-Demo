<?php

namespace App\Http\Controllers\eBookStore;

use App\Http\Requests\UserLoginRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class LogInController extends Controller
{
    public function index() {
        return view('eBookStore.signin');
    }
}
