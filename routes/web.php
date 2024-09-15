<?php

use App\Models\Mahasiswa;
use App\Models\Registrasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('account/register', function () {
    return view('Auth/Register');
});

Route::post('account/register', function (Request $req) {
    $mahasiswa = new Mahasiswa;
    $mahasiswa->nama = $req->nama;
    $mahasiswa->email = $req->email;
    $mahasiswa->ipk = $req->ipk;
    $mahasiswa->password = Hash::make($req->password);
    $mahasiswa->save();

    Session::put('user', $req->email);

    return redirect()->intended('/beasiswa');
});

Route::get('account/login', function () {
    return view('Auth/Login');
});

Route::post('account/login', function (Request $req) {
    $user = DB::table('mahasiswas')->where('email', '=', $req->email)->first();

    // cek password
    if (Hash::check($req->password, $user->password)) {
        Session::put('user', $user->email);
        return redirect()->intended('/beasiswa');
    } else {
        return view('Auth/Login');
    }
});

Route::get('/beasiswa', function () {
    return view('Beasiswa');
})->middleware('user');


Route::get('/register', function () {
    $userEmail = Session::get('user');
    // dd($userEmail);
    $user = DB::table('mahasiswas')->where('email', '=', $userEmail)->first();
    return view('Register', [
        'nama' => $user->nama,
        'email' => $user->email,
        'ipk' => $user->ipk
    ]);
})->middleware('user');

Route::post('/register', function (Request $req) {
    $file = $req->file;

    $userEmail = Session::get('user');

    $user = DB::table('mahasiswas')->where('email', '=', $userEmail)->first();

    if ($file) {
        $filename = md5(time() . Session::get('user')) . "." . $file->extension();

        $path = public_path('documents');

        if (!File::exists($path)) {
            File::makeDirectory($path, 0777, true, true);
        }

        $saved = $file->move('documents', $filename);

        if ($saved) {
            $regist = new Registrasi;
            $regist->nama = $req->nama;
            $regist->email = $userEmail;
            $regist->nohp = $req->phone;
            $regist->semester = $req->semester;
            $regist->ipk = $user->ipk;
            $regist->beasiswa = $req->beasiswa;
            $regist->file = $filename;
            $regist->status = 'pending';
            $regist->save();

            return redirect()->intended('/register');
        }

        return redirect()->intended('/register');
    } else {
        return view('Register');
    };
})->middleware('user');

Route::get('/result', function () {
    $userEmail = Session::get('user');
    $data = DB::table('registrasis')->where('email', '=', $userEmail)->first();
    return view('Result', ['data' => $data]);
})->middleware('user');

Route::get('/', function () {
    return redirect('account/login');
});
