@extends('layouts.master')

@section('judul')
    
@endsection

@section('isi')
    pppp
    {{-- <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center" style="padding-bottom: 130px; padding-top: 40px">    
        @forelse ($tampil as $data)
            <div class="col mb-5">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('image/'.$data->foto)}}" alt="..." />
                    <div class="card-body">
                            <h4 class="fw-bolder">{{ ' '.$data->kategori }}</h4>
                            <i class="fa fa-map-marker" style=""></i>{{ Str::limit(' '.$data->provinsi.', '.$data->alamat, 24) }} <br>
                            <i class="fa fa-book"></i> {{ Str::limit( ' '.$data->keterangan, 18) }} <br>
                            <i class="fa fa-clock"></i> {{ ' '.$data->tanggal }}
                            <br>
                            <a class="btn btn-primary btn-sm" href="/laporanupvote/{{$data->id}}"> <i class="fa fa-toggle-up"></i> </a>
                            <a class="btn btn-secondary btn-sm" href="/laporandownvote/{{$data->id}}"> <i class="fa fa-toggle-down"></i> </a> {{$data->vote}}
    
                            
                        <form action="/laporan/{{$data->id}}" method="POST">
                            @csrf
                            @method('delete')
                            <br>
                            <a href="/laporan/{{ $data->id }}" class="btn btn-info" style="padding-left: 90px; padding-right: 90px">Detail</a>
                        </form>
                    </div>
                </div>
                
            </div>
        @empty
            
        @endforelse
    </div> --}}
@endsection