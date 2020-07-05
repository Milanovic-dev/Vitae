<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Resume;

class PathController extends Controller
{
    public function home(){
        return view('welcome');
    }

    public function login(){
        return view('login');
    }

    public function dashboard(){
        if(!Auth::user()) {
            return view('login');
        }

        $resumes = Resume::where('user_id', Auth::user()->id)->get();
        
        return view('dashboard')->with('resumeCount', $resumes->count())->with('resumes', $resumes);
    }

    public function create(){
        return view('create');
    }
}
