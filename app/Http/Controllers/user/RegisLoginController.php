<?php

namespace App\Http\Controllers\user;

use App\Models\User;
use App\Models\RefProvince;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateUserRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class RegisLoginController extends Controller
{

    //-----------------------------------------------------------regis--------------------------------------------------------------------------
    public function index()
    {
        $user = User::get();
        $province = RefProvince::get();

        return view('user.registrasi', compact('user','province'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'      => 'required',
            'email'     => 'required|email|unique:user',
            'username'  => 'required',
            'password'  => 'min:5|required_with:confirm|same:confirm',
            'age'       => 'required',
            'confirm'   => 'min:5'
        ]);
        //untuk insert ke tabel
        $regis = new User;
        $regis->name = $request->name;
        $regis->email = $request->email;
        $regis->username = $request->username;
        $regis->password = $request->password;
        $regis->age = $request->age;
        $regis->phone = $request->phone;
        $regis->ref_province_id = $request->refProvinceId;
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
            'age'       => 'required',
            'confirm'   => 'min:5'
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
            'age.required'           => 'wajib diisi.',
            'confirm.min'       => 'confirm minimal diisi dengan 5 karakter'
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
        $regis->age = $request->age;
        $regis->phone = $request->phone;
        $regis->ref_province_id = $request->refProvinceId;
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
        $regis->age = $request->age;
        $regis->phone = $request->phone;
        $regis->ref_province_id = $request->refProvinceId;
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

    public function Signout()
    {
        Session::flush();
        return redirect()->route('home');
    }
}
