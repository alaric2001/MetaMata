<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Resep;
use App\Models\User;
use App\Models\Like;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function inputlike($id)
    {   
        $like=Like::where('resep_id', $id)->where('user_id', Auth::id())->first();
        if ($like) {
            $like->delete();
            return redirect()->back();
        } else {
            Like::create([
                'resep_id'=>$id,
                'user_id'=>Auth::id()
            ]);
            return redirect()->back();
        };
    }
}
