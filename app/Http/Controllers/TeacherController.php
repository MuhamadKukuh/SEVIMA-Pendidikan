<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\LearningMaterial;

class TeacherController extends Controller
{
    public function index(){
        $data['title'] = "Dashboard";
        $data['latest_materials'] = LearningMaterial::where('teacher_id', Auth()->User()->Teacher->teacher_id)->orderBy('created_at')->limit(10)->get();
        $data['new_users'] = User::whereDate('created_at', date('Y-m-d'))->where('role_id', '!=', '2')->limit(5)->get();
        $data['materials'] = LearningMaterial::where('teacher_id', Auth()->User()->Teacher->teacher_id)->count();
        $data['users'] = User::where('role_id', '!=', '2')->count();

        return view('Admin.Index', $data);
    }
}
