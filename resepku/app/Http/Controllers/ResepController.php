<?php

namespace App\Http\Controllers;
// namespace App\Http\Controllers\Auth;
use DB;
use Illuminate\Http\Request;
use App\Models\Resep;
use App\Models\User;
// use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;

class ResepController extends Controller
{
    public function index()
    {   
        
        // $editProfile = Profile::where('user_id', Auth::id())->first();
        // return view ('user.profile.profile_', compact('editProfile'));
        return view('resepku.index');
        // dd($profile);
    }

    public function inputpage()
    {   
        return view('resepku.input');
    }

    public function inputdata(Request $request)
    {   
        $request->validate([
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max: 10000'], //
        [
            'foto.required'  => 'Harus diisi'
        ]);

        $dataresep = new Resep;
        $userid=DB::table('users')->where('id', Auth::id())->first();

        $fileName=time().'.'.$request->foto->extension();
        $request->foto->move(public_path("image"), $fileName);
        
        $databahan=$request->bahan;
        for ($i=0; $i < count((array)$databahan); $i++) {
            $kolom = 'bahan'.$i;
            $dataresep->$kolom=$request->bahan[$i];
        };

        $dataresep->judul=$request["judul"];
        $dataresep->deskripsi=$request["deskripsi"];
        $dataresep->carabuat=$request["carabuat"];
        $dataresep->user_id=$userid->id;
        $dataresep->foto=$fileName;
        // dd($request->all());
        $dataresep->save();
        
        return redirect('/resep');
    }
}
