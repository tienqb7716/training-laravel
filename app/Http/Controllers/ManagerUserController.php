<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class ManagerUserController extends Controller
{
    public function index()
    {
        $users = DB::table('users')->select('*');
        $users = $users->get();

        return view('auth.manageruser',compact( 'users'));
    }
}
