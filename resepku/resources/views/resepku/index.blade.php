@extends('layouts.master')

@section('judul')
    Index
@endsection

@section('isi')
<div class="container" style="width:900px">
    
    <div class="row gx-4 gx-lg-2 row-cols-1 justify-content-center" style="padding-bottom: 100px; padding-top: 24px">
        <h5 style="padding-left: 84px; margin-bottom: 12px">Resep Terbaru</h5>
        @forelse ($tampil as $data)
            <div class="col mx-2" style="width: 230px">
                {{-- <center> --}}
                <div class="card" style="border: none; margin-bottom: 30px">
                    <a href="/resep/{{ $data->id }}" style="text-decoration: none">
                        <img class="card-img-top" style="position: sticky;height: 200px;
                        width: 100%;object-fit:cover;" src="{{ asset('image/'.$data->foto)}}" alt="foto makanan" style=""/>
                    </a>
                    
                    <div class="card-body" style="padding: 0">
                        <div style="font-family: 'poppins';font-style: normal; font-weight: 400; 
                        font-size: 14px; line-height: 16px; color: #666666; padding-bottom: 7px;
                        padding-top: 6px">
                            {{-- {{$like}} Orang Menyukai ini --}}
                        </div>
                        <div style="font-family: 'poppins'; font-style: normal; padding-bottom: 5px;
                        font-weight: 500; font-size: 18px; line-height: 21px; width: 228px">
                            <a href="/resep/{{ $data->id }}" style="text-decoration: none; color: #547794">
                                {{$data->judul}}
                            </a>
                        </div>
                        <div style="font-family: 'poppins'; 
                        font-style: normal; font-weight: 400; font-size: 14px;
                        line-height: 16px;  width: 100%">
                        <a href="/resep/{{ $data->id }}" style="text-decoration: none; color: #000000;">
                            {{$data->deskripsi}}
                        </a>
                        </div>
                            {{-- <h4 class="fw-bolder">{{ ' '.$data->judul }}</h4> --}}
                            {{-- <i class="" style=""></i>{{ Str::limit(' '.$data->deskripsi.', '.$data->alamat, 24) }} <br> --}}
                            {{-- <i class="fa fa-book"></i> {{ Str::limit( ' '.$data->keterangan, 18) }} <br>
                            <i class="fa fa-clock"></i> {{ ' '.$data->tanggal }} --}}
                            <br>
                            <div style="text-align: center">
                                    <a class="btn" href="/like_/{{$data->id}}" style="width: 100%; border-radius: 10px;
                                    background: #C2C9CD;"><b>Suka</b><i class=""></i> </a>
                            </div>
                    </div>
                </div>
            </div>
        @empty
            
        @endforelse
</div>
</div>

@endsection