@extends('template.main')
@section('konten')
<!-- bradcam_area_start  -->
@php
    $item = $kamar->first();
    $gambarBase64 = base64_encode($item->gambar_satu);
    $gambarPath = 'data:image/jpeg;base64,' . $gambarBase64;
@endphp

<div class="bradcam_area breadcam_bg overlay d-flex align-items-center justify-content-center" style="background-image: url('{{ $gambarPath }}');">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text text-center">
                    <h3>Kos-Kosan</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- bradcam_area_end  -->

<!-- daftar_kosan_start  -->
<div class="popular_causes_area pt-120">
    <div class="container">
        <div class="row">
            @foreach ($kamar as $item)
            <div class="col-lg-3 col-md-6">           
                <div class="single_cause">   
                    <div class="single_cause">
                        <div class="thumb">
                            @php
                            $gambarData = $item->gambar_satu;
                            $gambarBase64 = base64_encode($gambarData);
                            $gambarPath = 'data:image/jpeg;base64,' . $gambarBase64;
                            @endphp
                            <img src="{{ $gambarPath }}" alt="" style="aspect-ratio: 3/2;">
                        </div>
                        <div class="causes_content">
                            <center style="margin-top: -1rem">
                                <a href="#" class="genric-btn primary radius" style="font-size: 10px;">{{$item->gender}}</a>
                            </center>
                            <div class="balance d-flex justify-content-between align-items-center mt-1" style="font-size: 12px;">
                                @if ($item->stok_kamar == 0)
                                    <span class="text-danger">Kamar Penuh</span> &nbsp;
                                @else
                                <span>Sisa Kamar: {{$item->stok_kamar}}</span> &nbsp;
                                @endif                     
                                Rp.{{ number_format($item->harga, 0, ',', '.') }}
                            </div>                            
                            <h4 style="font-size: 16px;">{{$item->nama}}</h4>
                            <p style="font-size: 14px;">{{$item->deskripsi}}</p>
                            <a class="read_more" href="{{ route('show',$item->id_kamar)}}" style="font-size: 12px;">Read More</a>
                        </div>
                    </div>                       
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- daftar_kosan_end  -->
@endsection