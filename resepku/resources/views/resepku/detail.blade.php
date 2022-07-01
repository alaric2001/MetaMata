@extends('layouts.master')

@section('judul')
    Detail
@endsection

@section('isi')

<div class="container">
    <center>
        <div class="card" style="border: none; width: 768px; padding-top:10px; text-align:left">
            <img class="card-img-top" style="position: sticky; height: 400px;
            width: 100%;object-fit:cover;" src="{{ asset('image/'.$detail->foto)}}" alt="foto makanan" style=""/>
            <div class="card-body">
                <div style="font-family: 'poppins';font-style: normal; font-weight: 400; 
                        font-size: 18px; line-height: 16px; color: #666666; padding-bottom: 7px;
                        padding-top: 6px">
                            {{$like}} Orang Menyukai ini
                </div>

                <div style="font-style: normal; font-weight: 500;font-size: 36px; 
                    line-height: 41px;color: #000000; padding-bottom: 10px">
                    {{ $detail->judul }}
                </div>

                <div style="font-family: 'poppins'; font-style: normal; font-weight: 400;
                    font-size: 18px; line-height: 21px; color: #000000; padding-bottom: 20px">
                    {{ $detail->deskripsi }}
                </div>

                <h3>Bahan-bahan</h3>
                <div style="font-family: 'poppins'; font-style: normal; padding-bottom: 20px;
                    font-weight: 400; font-size: 14px; line-height: 16px; color: #000000;
                    padding-left: 2px">
                    <?php
                        for ($i=0; $i < 10; $i++) { 
                            $ambil = 'bahan'.$i;
                            $ulang = $detail->$ambil;
                            
                            if ($ulang == Null) {
                                break;
                            }else{
                                echo $ulang.'<br>';
                            };
                        }
                    ?>
                </div>

                <h3>Langkah Pembuatan</h3>
                <div style="font-family: 'poppins'; font-style: normal; 
                    font-weight: 400; font-size: 14px; line-height: 16px; color: #000000;">
                    <ol style="padding-left: 20px">
                        <?php
                            for ($i=0; $i <= 9; $i++) { 
                                $ambil = 'carabuat'.$i;
                                $ulang = $detail->$ambil;
                                
                                if ($ulang == Null) {
                                    break;
                                }else{
                                    $print = '<li>'.$ulang.'</li>';
                                    echo $print;
                                };
                            }
                        ?>
                    </ol>
                </div>

                <div style="text-align: center; padding-bottom: 78px;">
                    <a class="btn" href="/like_/{{$detail->id}}" style="width: 100%; border-radius: 10px;
                    background: #C2C9CD;"><b>Suka</b><i class=""></i> </a>
                </div>
        
            </div>
        </div>
    </center>
    
</div>


@endsection