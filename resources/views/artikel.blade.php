@extends('template/base')
@section('content')
<section class="desc">
<div class="container">
  <div class="row">
    <div class="col-md-12">
    <div class="separator1">
      <h2 class="wide-spacing">Artikel</h2>
    </div>
  </div>
  </div>
</div>
  <div class="container">
    <div class="row">
        <div class="col-md-10">
        <div class="img small-round-img mr-4" style="background-image:url('{{$user->avatar}}');"></div>
          <h5 class="text ">{{ $user->name }}</h5>
          <h6 class="text">{{ $data->created_at->format('d F Y H:i' ) }}</h6>
          <h6 class="text">{{ $data->vote }} likes</h6>
        </div>
        <div class="col-md-1">
          <button class="btn btn-lg btn-success btn-block"><i class="far fa-thumbs-up"></i></button>
        </div>
        <div class="col-md-1">
            <button class="btn btn-lg btn-danger btn-block"><i class="far fa-thumbs-down"></i></button>
        </div>
      </div>
  </div>
  <div class="container">
    <div class="row ">
      <div class="col-md-12 mt-5">
        <h1 class="test mb-5 text-left">{{ $data->judul_artikel }}</h1>
        <div class="img mb-4" style="background-image:url('@if (is_null($data->banner)){{$wisata->banner}}');"@else{{$data->banner}}');"@endif
        ></div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-11">
          {!! $data->isi_artikel !!}

        </div>
      </div>

    </div>
  </div>
   <div class="container pt-5">
  <h3 class="wide-spacing">Related Article</h3>
  <div class="half-separator"></div>
  <div class="row">
    <div class="card-deck" style="width:100%">
      @foreach ($related as $item)
      <div class="card">
          <a href="{{ URL::to("artikel/{$item->id}/{$item->judul_artikel}") }}">
            <div class="img" style="background-image:url('{{$item->banner}}');"></div>
          </a>
          <div class="card-body">
            <a class="color-inherit" href="{{ URL::to("artikel/{$item->id}/{$item->judul_artikel}") }}">
              <h4 class="card-title mb-0">{{ $item->judul_artikel }}</h4>
            </a>
          </div>
        </div>
      @endforeach
    </div>
  </div>


</section>

<div  class="container pt-5">
    <div class="row">
        <div class="col-sm-12">
            <form action="">
                <div class="form-group col ">
                    <label for="exampleFormControlTextarea1">Comment</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
                </div>
                <div class="col">
                        <button type="button" class="btn btn-secondary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="separator"></div>
