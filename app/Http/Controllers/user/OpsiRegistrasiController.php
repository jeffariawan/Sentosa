<?php

namespace App\Http\Controllers\user;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OpsiRegistrasiController extends Controller
{
    public function index()
    {  
        $user=User::get();

        return view('user.opsiregistrasi',compact('user'));
    }
}
