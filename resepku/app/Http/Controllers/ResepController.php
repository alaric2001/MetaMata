<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\Resep;

class ResepController extends Controller
{
    public function index()
    {   
        
        // $editProfile = Profile::where('user_id', Auth::id())->first();
        // return view ('user.profile.profile_', compact('editProfile'));
        return view('index');
        // dd($profile);
    }
}
