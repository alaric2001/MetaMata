<?php

namespace App\Http\Controllers;
use DB;
use App\Models\User;
use App\Models\Like;
use App\Models\Resep;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResepController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {   
        
        $tampil= Resep::orderBy('id','desc')->get();
        // $dataid= Resep::where('id')->first();
        // $like = Like::where('resep_id', $dataid->id)->count();

        // $like_ =Like::with('resep')->get();
        // $resep_ =Resep::with('like')->get();

        // return view('resepku.index', compact('resep_', 'like_'));
        return view('resepku.index', compact('tampil'));
        // dd($profile);
    }

    public function suka($id){
        $data = Resep::find($id);

        $hitung = $data->like;
        if ($hitung){
            $hitung =-1 ;
            $data->update();
        }else{
            $hitung =+ 1;
            $data->like = $hitung;
            $data->update();
        }

        return redirect()->back();

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

        $carapembuatan=$request->carabuat;
        for ($i=0; $i < count((array)$carapembuatan); $i++) {
            $data = 'carabuat'.$i;
            $dataresep->$data=$request->carabuat[$i];
        };

        $dataresep->judul=$request["judul"];
        $dataresep->deskripsi=$request["deskripsi"];
        $dataresep->user_id=$userid->id;
        $dataresep->foto=$fileName;
        $dataresep->like=0;
        // dd($request->all());
        $dataresep->save();
        
        return redirect('/resep');
    }

    public function satudata($id)
    {   
        // $komen = DB::table('komentar')->where('laporan_id', $id)->get();
        $detail = Resep::where('id', $id)->first();
        $like = Like::where('resep_id', $id)->count();
        return view('resepku.detail', compact('detail', 'like'));
    }

}
