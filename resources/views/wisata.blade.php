@extends('template/base')
@section('content')
<section class="desc">
        <div class="separator">
        <h2 class="wide-spacing">{{$data->nama_wisata}}</h2>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="img round-img" style="background-image:url('{{$data->banner}}');"></div>
                <div class="w-100"></div>
            <div class="row justify-content-center mt-5" style="width:100%;">
                <div class="col-md-5">
                    <p class="small-desc text-justify line-2">{!! $data->deskripsi !!}</p>
                </div>
            </div>
            </div>
            <div class="container">
              <div class="row justify-content-around">
                <div class="col-md-2 mt-5">
                  <a href="{{ route('artikel.create', ['artikel' => $data->id]) }}" class="btn btn-primary btn-lg wh" role="button" aria-pressed="true">Create Article</a>
                </div>
              </div>
            </div>
        </div>
</section>
<section class="desc mt-5">
    <div class="container mt-5">
        <h2 class="text-left">Article's about this place</h2>
        <div class="row mt-5 mb-5">
            @foreach ($artikel as $item)
            <a href="{{ URL::to("artikel/{$item->id}/{$item->judul_artikel}") }}" style="width:100%; padding:15px 30px;" class="color-inherit border">
                <div class="col-md-12">
                    <div class="img small-but-not-that-small-but-smaller-round-img mr-4" style="background-image:url('{{$item->banner}}');"></div>
                        <h4 class="text mt-1  ">{{ $item->judul_artikel }}</h4>
                        <p class="text mt-2 smaller">{{ $item->created_at->format('d F Y H:i' ) }}</p>
                        <p class="text smaller">{{ $item->vote }} likes</p>
                </div>
            </a>
            @endforeach
        </div>
      </div>
      <div class="row justify-content-center">
            {{ $artikel->links() }}
        </div>
</section>

@endsection
