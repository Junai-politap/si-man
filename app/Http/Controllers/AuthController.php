<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\SuperAdmin;
use App\Models\User;
use App\Models\Admin;
use App\Models\Pegawai;
/**
*
*/
class AuthController extends Controller
{
	public function login(){

		return view ('login');

	}

	public function LoginProses(){
		if (auth()->guard('super-admin')->attempt(['email' => request('email'), 'password' => request('password')])){
            return redirect('super-admin')->with('success', 'Login Berhasil');
        }

		if (auth()->guard('admin')->attempt(['email' => request('email'), 'password' => request('password')])){
            return redirect('admin');
        }

		if (auth()->guard('pegawai')->attempt(['email' => request('email'), 'password' => request('password')])){
            return redirect('pegawai');
        }

		return redirect('login');
	}

	public function logout(Request $request){
		auth()->logout();
		auth()->guard('admin')->logout();
		auth()->guard('pegawai')->logout();
		return redirect('login');
	}


}
