<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Student;
use App\Models\SchoolClass;
use App\Models\StudyProgram;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AuthenticateController extends Controller
{
    public function loginIndex(){
        return view('Login');
    }

    public function registerIndex(){
        $data['prodies'] = StudyProgram::all();
        $data['class']   = SchoolClass::all();
        
        // dd("dasda");
        return view('Register', $data);
    }

    public function loginProccess(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if(Auth()->User()->role_id == 1){
                return redirect('/');
            }else{
                return redirect()->intended('dashboard');
            }
        }
 
        return back()->with('error', "Akun tidak di temukan silahkan periksa kembali");
    }

    public function registerProccess(Request $request){
        // dd($request->all());
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'confirmed'],
            'nik'   => 'unique:students|required|max:12',
            'nis'   => 'unique:students|required|max:12',
            'full_name' => "required|max:200",
            "address"   => "required|max:250"
        ]);
        // dd($request->all());

        DB::transaction(function() use($request){
            $user = User::create([
                'email' => $request->email,
                'password' => $request->password,
                'phone_number' => "20002",
                'role_id' => 1
            ]);

            Student::create([
                'full_name' => $request->full_name,
                "nis" => $request->nis,
                "class_id" => $request->class,
                "nik"   => $request->nik,
                "address" => $request->address,
                "program_id" => $request->program,
                "user_id" => $user->id
            ]);
        });

        return redirect('/login')->with('success', "Berhasil melakukan registrasi akun");
    }

    public function Logout(Request $request){
        Auth::logout();
 
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/login');
    }
}
