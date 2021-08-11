<?php

namespace App\Http\Controllers\user;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateUserRequest;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Validator;

class RegisLoginController extends Controller
{

    //-----------------------------------------------------------regis--------------------------------------------------------------------------
    public function index()
    {
        $user = User::get();

        return view('user.registrasi', compact('user'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'      => 'required',
            'email'     => 'required|email|unique:user',
            'username'  => 'required',
            'password'  => 'min:5|required_with:confirm|same:confirm',
            'confirm'   => 'min:5'
        ]);
        //untuk insert ke tabel
        $regis = new User;
        $regis->name = $request->name;
        $regis->email = $request->email;
        $regis->username = $request->username;
        $regis->password = $request->password;
        $regis->save();
        return back()->with('success', 'Registrasi Sukses!');
    }

    public function store1(Request $request)
    {
        $rules = [
            'name'      => 'required',
            'email'     => 'required|email|unique:user',
            'username'  => 'required',
            'password'  => 'min:5|required_with:confirm|same:confirm',
            'confirm'   => 'required'
        ];

        $messages = [
            'name.required'          => 'Nama wajib diisi.',
            'password.required'      => 'Password wajib diisi.',
            'password.min'           => 'Password minimal diisi dengan 5 karakter.',
            'password.same'          => 'Password dan confirm harus sama',
            'username.required'      => 'Username wajib diisi.',
            'email.required'         => 'Email wajib diisi.',
            'email.email'            => 'Email tidak valid.',
            'email.unique'           => 'Email sudah terdaftar.',
            'confirm.required'       => 'confirm minimal diisi dengan 5 karakter'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }

        $regis = new User;
        $regis->name = $request->name;
        $regis->email = $request->email;
        $regis->username = $request->username;
        $regis->password = $request->password;
        $regis->save();
        return back()->with('success', 'Registrasi Sukses!');
    }

    public function store2(CreateUserRequest $request)
    {
        $regis = new User;
        $regis->name = $request->name;
        $regis->email = $request->email;
        $regis->username = $request->username;
        $regis->password = $request->password;
        $regis->save();
        session(['userIdRegis' => $regis->user_id]);
        return redirect()->route('user.opsiregistrasi');
    }


    //-----------------------------------------------------------login--------------------------------------------------------------------------
    public function indexLogin()
    {
        $login = User::get();

        return view('user.login', compact('login'));
    }


    public function validasiLogin(Request $request)
    {

        $user = User::where('username', '=',  $request->username)
            ->where('password', '=', $request->password)
            ->first();

        if (is_null($user)) {
            return back()->with('success', 'Username atau Sandi anda salah!');
        } else {
            session(['userId' => $user->user_id]);
            return redirect()->route('home');
        }
    }

    public function validasiLogin1(Request $request)
    {
        $rules = [
            'username'  => 'required',
            'password'  => 'min:5|required'
        ];

        $messages = [
            'password.required'      => 'Password wajib diisi.',
            'password.min'           => 'Password minimal diisi dengan 5 karakter.',
            'username.required'      => 'Username wajib diisi.'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }

        $user = User::where('username', '=',  $request->username)
            ->where('password', '=', $request->password)
            ->first();

        if (is_null($user)) {
            return back()->with('success', 'Username atau Sandi anda salah!');
        } else {
            session(['userId' => $user->user_id]);
            return redirect()->route('home');
        }
    }

    public function validasiLogin2(LoginRequest $request)
    {
        $user = User::where('username', '=',  $request->username)
            ->where('password', '=', $request->password)
            ->first();

        if (is_null($user)) {
            return back()->with('success', 'Username atau Sandi anda salah!');
        } else {
            session(['userId' => $user->user_id]);
            return redirect()->route('dashboard.index');
        }
    }
}
