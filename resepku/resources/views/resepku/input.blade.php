@extends('layouts.master')

@section('judul')
    Tambah Resep
@endsection


@section('isi')

<div class="container py-4" style="margin-bottom: 153px; width: 767px">
    <form action="/add_resep" id="add_form" method="POST" style="padding-bottom: 14px; padding-left: 14px; padding-right: 14px" enctype="multipart/form-data">
        @csrf
            <div class="form-group pt-3">
                <label>Judul</label>
                <input type="text" class="form-control" name="judul" placeholder="">
            </div>
            @error('judul')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
    
            <div class="form-group pt-3">
                <label>Deskripsi</label>
                <input type="text" class="form-control" name="deskripsi" placeholder="">
            </div>
            @error('deskripsi')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            
            <div class="form-group pt-3">
                <label>Bahan-bahan</label>
                <div>
                    <input type="text" class="form-control" name="bahan[0]" style="margin-bottom:8px">
                    <div id="show_item"> </div>
                    <div>
                        <a href="" id="add_item_btn" style="font-family: 'Ubuntu'; font-style: normal; font-weight: 400; font-size: 14px;
                        line-height: 21px; text-decoration: none; color:black">+ Item Bahan</a>
                    </div>
                </div>
            </div>
            @error('bahan[0]')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            
            <div class="form-group pt-3">
                <label>Langkah Pembuatan</label>
                <div>
                    <input type="text" class="form-control" name="carabuat[0]"style="margin-bottom:8px">
                    <div id="item_tambahan"> </div>
                    <div>
                        <a href="" id="item_tambah" style="font-family: 'Ubuntu'; font-style: normal; font-weight: 400; font-size: 14px;
                        line-height: 21px; text-decoration: none; color:black">+ Item Langkah</a>
                    </div>
                </div>
            </div>
            @error('carabuat')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            
            <div class="form-group pt-3">
                <label>Upload Foto Masakan</label>
                <input type="file" class="form-control" name="foto">
            </div>
            @error('foto')
                <div class="alert alert-danger my-1">{{ $message }}</div>
            @enderror

            <div class="form-group" style="padding-top: 20px">
                <button type="submit" class="btn btn-primary" id="add_data">Submit</button>
                {{-- <input type="submit" class="btn btn-primary" id="add_data" value="Submit"> --}}
            </div>
    </form>
</div>

@endsection


@section('script')
    <script type="text/javascript">
        $(document).ready(function(){
            var i = 0;
            $("#add_item_btn").click(function(e){
                e.preventDefault();
            ++i;
            if (i < 10 ) {
                
                $("#show_item").append(` 
                    <div style="padding-bottom:8px">
                        <input type="text" class="form-control" name="bahan[`+i+`]" placeholder="">
                    </div>
                    @error('bahan[`+i+`]')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror`);
                } else {
                    $("#show_item").append(` 
                    <div style="padding-bottom:8px">
                        <input type="text" class="form-control" disabled>
                    </div>
                    @error('bahan[`+i+`]')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror`);
                }
            });
        });
        

        $(document).ready(function(){
            var i = 0;
            $("#item_tambah").click(function(e){
                e.preventDefault();
            ++i;
            if (i < 10 ) {
                
                $("#item_tambahan").append(` 
                    <div style="padding-bottom:8px">
                        <input type="text" class="form-control" name="carabuat[`+i+`]" placeholder="">
                    </div>
                    @error('carabuat[`+i+`]')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror`);
                } else {
                    $("#item_tambahan").append(` 
                    <div style="padding-bottom:8px">
                        <input type="text" class="form-control" disabled>
                    </div>
                    @error('carabuat[`+i+`]')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror`);
                }
            });
        });
    </script>
@endsection