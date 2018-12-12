@extends('template/base')
@section('content')
<section class="banner" style="background-image: url('{{asset('assets/images/yogyakarta.jpg')}}')">
  <div class="row justify-content-center">
      <div class="img-banner round-img" style="background-image:url('{{asset($data->avatar)}}');"></div>
  </div>
</section>
<div class="half-separator"></div>
  <div class="container border rounded">
    <div class="row">
      <div class="col-md-10 mr-5">
        <h2 class="text">Data Diri</h2>
        <h3 class="text mt-3">{{$data->name}}</h3>
        <h6 class="text mt-3">TTL Maybe</h6>
      </div>
      <div class="col-md-1">
        <a href="#" class="btn btn-primary btn-lg" role="button" aria-pressed="true" data-toggle="modal" data-target="#modalUpdate" >Update</a>
      </div>
    </div>
  </div>
<div class="half-separator"></div>
  <div class="container">
    <div class="row">
        @foreach ($artikel as $item)
        <a href="{{ URL::to("artikel/{$item->id}/{$item->judul_artikel}") }}" style="width:100%; color:initial">
            <div class="col-md-12 border rounded">
              <div class="img small-but-not-that-small-round-img mr-4" style="background-image:url('{{asset($item->banner)}}');"></div>
              <h1 class="text mt-1  ">{{$item->judul_artikel}}</h1>
              <h6 class="text mt-2">{{ $item->created_at->format('d F Y H:i' ) }}</h6>
              <h6 class="text mt-2">{{$item->vote}}</h6>
            </div>
        </a>
        @endforeach
        {{ $artikel->links() }}
    </div>
  </div>
<!-- Modal -->

<div class="modal fade" id="modalUpdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
              <h4 class="modal-title">Update Informasi Anda.</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <form class="form-horizontal" id="update_form" method="POST" action="{{ route('profile.update', $data) }}" enctype='multipart/form-data'>
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        
                        <label for="name" class="col-md-6 control-label">Nama Lengkap</label>
                    <div class="col-md-12">
                        <input id="name" type="text" class="form-control" placeholder="Masukkan Nama" name="name" value="{{$data->name}}" required autofocus>
                        @if ($errors->has('name'))
                          <span class="help-block">
                              <strong>{{ $errors->first('name') }}</strong>
                          </span>
                          @endif
                    </div>

                </div>
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                  <label for="email" class="col-md-6 control-label">E-Mail</label>
                    <div class="col-md-12">
                      <input id="email" type="email" class="form-control" name="email" placeholder="Masukkan E-Mail" value="{{$data->email}}" required>
                      @if ($errors->has('email'))
                          <span class="help-block">
                              <strong>{{ $errors->first('email') }}</strong>
                          </span>
                          @endif
                  </div>
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                  <label for="password" class="col-md-6 control-label">Password</label>
                    <div class="col-md-12">
                      <input id="password" type="password" class="form-control" name="password" placeholder="Masukkan Password" minlength="6">
                      @if ($errors->has('password'))
                          <span class="help-block">
                              <strong>{{ $errors->first('password') }}</strong>
                          </span>
                      @endif
                  </div>
                </div>

                <div class="form-group">
                    <label for="avatar" class="col-md-6 control-label">Foto Profile</label>
                    <div class="col-md-12">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="avaPhoto" name="avatar">
                            <label class="custom-file-label" for="avaPhoto">Choose Image</label>
                        </div>
                    </div>
                </div>


                    <!-- <div class="form-group">
                        <label for="password-confirm" class="col-md-6 control-label">Confirm Password</label>

                        <div class="col-md-12">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        </div>
                    </div> -->
                </div>
                <div class="modal-footer">
                  <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button id="btn-update" type="submit" class="btn btn-primary">
                            Update
                        </button>
                    </div>
                  </div>
                </div>

            </form>
        </div>
    </div>
</div>

@endsection
@section('js')

<script>
$('#avaPhoto').on('change',function(){
    //get the file name
    var fileName = document.getElementById("avaPhoto").files[0].name;
    //replace the "Choose a file" label
    $(this).next('.custom-file-label').html(fileName);
})
</script>
@endsection