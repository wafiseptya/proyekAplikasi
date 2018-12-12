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
          
        </div>
        <div class="col-md-1 col-sm-2">
          <form id="like-form" action="{{ route('artikel.like', ['id' => $data->id]) }}" method="POST" style="display: none;">
              @csrf
          </form>
          <a class="btn btn-lg btn-success btn-block" href="{{ route('artikel.like', ['id' => $data->id]) }}"
              onclick="event.preventDefault();
                            document.getElementById('like-form').submit();">
              <i class="far fa-thumbs-up"></i>
          </a>
        </div>
        <div class="col-md-1 col-sm-2">
          <form id="dislike-form" action="{{ route('artikel.dislike', ['id' => $data->id]) }}" method="POST" style="display: none;">
              @csrf
          </form>
          <a class="btn btn-lg btn-danger btn-block" href="{{ route('artikel.dislike', ['id' => $data->id]) }}"
              onclick="event.preventDefault();
                            document.getElementById('dislike-form').submit();">
              <i class="far fa-thumbs-down"></i>
          </a>
        </div>
      </div>
  </div>
  <div class="container">
    <div class="row ">
      <div class="col-md-12 mt-5">
        <h1 class="test font-weight-bold text-left mb-2">{{ $data->judul_artikel }}</h1>
        <h6 class="text mb-2">{{ $data->created_at->format('d F Y H:i' ) }}</h6>
          <h6 class="text mb-3">{{ $data->vote }} likes</h6>
        <div class="img mb-4" style="background-image:url('@if (is_null($data->banner)){{$wisata->banner}}');"@else{{$data->banner}}');"@endif
        ></div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-8 text-justify line-2" style="font-size:1.2rem; font-family:medium-content-serif-font,Georgia,Cambria,'Times New Roman',Times,serif;">
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
  <h3 class="wide-spacing my-5">Comments</h3>
  <div class="row px-4">
    <div class="card-group" style="width:100%">
      @foreach ($comments as $comment)
      <div class="col-md-12 border p-0 rounded">
        <div class="card-header">
          <div class="img small-round-img mr-4" style="background-image:url('{{asset($comment->user->avatar)}}'); height: 42px; width: 42px;"></div>
          <a style="color:initial;" href="{{ route('profile.show', ['username' => $comment->user->username]) }}">
            <p class="text small">{{$comment->user->name}}</p>
          </a>
          <p class="text mt-1 small">{{ $comment->created_at->format('d F Y H:i' ) }}</p>
        </div>
        <div class="card-body">
          <p class="text">{{$comment->value}}</p>
        </div>
      </div>
      @endforeach
      <div class="mt-2 w-100">
        <div class="row justify-content-center">
          {{ $comments->links() }}
        </div>
      </div>
    </div>
  </div>


</section>

<div  class="container pt-5">
    <div class="row">
        <div class="col-sm-12">
            <form  id="comment-form" action="{{ route('artikel.comment', ['id' => $data->id, 'uid' => Auth::user()->id]) }}" method="POST">
                <div class="form-group col ">
                    @csrf
                    <label for="comment">Comment</label>
                    <textarea class="form-control" name="value" id="comment" rows="6" placeholder="Comment Here"></textarea>
                </div>
                <div class="col">
                        <button type="submit" class="btn btn-secondary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="separator"></div>
@endsection