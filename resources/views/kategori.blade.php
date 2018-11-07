@extends('template/base')
@section('content')
<section class="header" style="background-image: url('{{$data->banner}}')">
    <div class="container">
        <div class="row">
            <div class="black-tint"></div>
            <div class="title col-12">
                <h1 class="text-thin">{{$data->nama_kategori}}.</h1>
            </div>
        </div>
    </div>  
</section>
<section class="kategori">
    <div class="separator">
        <h2 class="wide-spacing">{{$data->nama_kategori}}.</h2>
    </div>
    <div class="container">
        @foreach ($wisata as $item)
        <div class="row mb-5">
            <div class="col-md-3">
                <a href="{{ URL::to("wisata/{$item->id}/{$item->nama_wisata}") }}">
                    <div class="img med-round-img" style="background-image:url('{{$item->banner}}');"></div>
                </a>
            </div>
            <div class="col-md-9">
                <a class="no-style" href="{{ URL::to("wisata/{$item->id}/{$item->nama_wisata}") }}">
                    <h4 class="text-left">{{$item->nama_wisata}}.</h4>
                </a>
                <p class="small-desc text-justify last-left line-2">{{$item->deskripsi}}</p>
            </div>
        </div>
        @endforeach
        
        <div class="row justify-content-center">
            {{ $wisata->links() }}
        </div>

    </div>
</section>

@endsection