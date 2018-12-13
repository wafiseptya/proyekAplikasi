@extends('template/base')
@section('pageTitle', $data->name)
@section('content')
<div class="">
    <aside class="left-banner" style="background-image: linear-gradient(rgba(0, 0, 0, 0.25), rgba(0, 0, 0, 0.25)), url('{{asset('assets/images/bg-mount.jpg')}}')">
      <div class="mt-5 row h-100 justify-content-center wh align-content-center" style="flex-wrap: wrap">
          <div class="left-banner-items col-md-12">
              <div class="center-items p-0 border small-round-img m-auto">
                    {{ $data->artikel->sum('vote') }}
              </div>
              Likes
          </div>
          <div class="left-banner-items col-md-12">
              <div class="center-items p-0 border small-round-img m-auto">
                  {{ $data->artikel->count() }}
              </div>
              Artikels
          </div>
      </div>
    </aside>
    <section class="right-content">
        <div class="half-separator"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center">
                    <div class="center-bg-img med-round-img m-auto" style="background-image:url('{{asset($data->avatar)}}');"></div>
                    <h3 class="text text-center mt-3">{{$data->name}}</h3>
                    <h6 class="text text-center mt-3">About</h6>
                    <a href="#" class="btn btn-dark btn-lg mt-3" role="button" aria-pressed="true" data-toggle="modal" data-target="#modalUpdate" >Update</a>
                </div>
                <div class="col-md-1">
                </div>
            </div>
        </div>
        <div class="container">
            <h6 class="text mb-3 mt-3 big">Articles</h6>
            <div class="row">
                @foreach ($artikel as $item)
                <a href="{{ URL::to("artikel/{$item->id}/{$item->judul_artikel}") }}" style="width:100%; color:initial; font-size:0.6rem;">
                    <div class="col-md-12 border py-1 rounded">
                        <div class="img small-round-img mr-4" style="background-image:url('{{asset($item->banner)}}');"></div>
                        <h1 class="text">{{$item->judul_artikel}}</h1>
                        <h6 class="text mt-1 big">{{ $item->created_at->format('d F Y H:i' ) }}</h6>
                        <h6 class="text big">{{$item->vote}} Likes</h6>
                    </div>
                </a>
                @endforeach
                <div class="mt-3 mx-auto">
                    {{ $artikel->links() }}
                </div>
            </div>
        </div>
    </section>
</div>

<!-- <section class="kategori">
    <div class="separator">
        <h2 class="wide-spacing">category name.</h2>
    </div>
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-3">
                <div class="img med-round-img" style="background-image:url('{{asset('assets/images/tugu.jpg')}}');"></div>
            </div>
            <div class="col-md-9">
                <a class="no-style" href="#">
                    <h4 class="text-left">wisata title.</h4>
                </a>
                <p class="small-desc text-justify last-left line-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, ratione! Quaerat. Labore autem pariatur id veritatis maxime illum! Voluptas. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolor placeat fuga ipsum porro, ipsam rem dicta recusandae cum nostrum tenetur in dolores, nulla totam maxime reiciendis, reprehenderit officiis blanditiis error!</p>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-md-3">
                <div class="img med-round-img" style="background-image:url('{{asset('assets/images/budaya.jpg')}}');"></div>
            </div>
            <div class="col-md-9">
                <a class="no-style" href="#">
                    <h4 class="text-left">wisata title.</h4>
                </a>
                <p class="small-desc text-justify last-left line-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, ratione! Quaerat. Labore autem pariatur id veritatis maxime illum! Voluptas. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolor placeat fuga ipsum porro, ipsam rem dicta recusandae cum nostrum tenetur in dolores, nulla totam maxime reiciendis, reprehenderit officiis blanditiis error!</p>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-md-3">
                <div class="img med-round-img" style="background-image:url('{{asset('assets/images/pantai.jpg')}}');"></div>
            </div>
            <div class="col-md-9">
                <a class="no-style" href="#">
                    <h4 class="text-left">wisata title.</h4>
                </a>
                <p class="small-desc text-justify last-left line-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, ratione! Quaerat. Labore autem pariatur id veritatis maxime illum! Voluptas. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolor placeat fuga ipsum porro, ipsam rem dicta recusandae cum nostrum tenetur in dolores, nulla totam maxime reiciendis, reprehenderit officiis blanditiis error!</p>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-md-3">
                <div class="img med-round-img" style="background-image:url('{{asset('assets/images/kuliner1.jpg')}}');"></div>
            </div>
            <div class="col-md-9">
                <a class="no-style" href="#">
                    <h4 class="text-left">wisata title.</h4>
                </a>
                <p class="small-desc text-justify last-left line-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, ratione! Quaerat. Labore autem pariatur id veritatis maxime illum! Voluptas. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolor placeat fuga ipsum porro, ipsam rem dicta recusandae cum nostrum tenetur in dolores, nulla totam maxime reiciendis, reprehenderit officiis blanditiis error!</p>
            </div>
        </div>

        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
              <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">Previous</a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item active"><a class="page-link" href="#">2<span class="sr-only">(current)</span></a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#">Next</a>
              </li>
            </ul>
        </nav>

    </div>
</section> -->


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
                <div class="form-group{{ $errors->has('bio') ? ' has-error' : '' }}">
                        
                    <label for="bio" class="col-md-6 control-label">Biodata</label>
                    <div class="col-md-12">
                        <textarea id="bio" class="form-control" placeholder="Masukkan Bio" name="bio" value="{{$data->bio}}" required>
                        @if ($errors->has('bio'))
                          <span class="help-block">
                              <strong>{{ $errors->first('bio') }}</strong>
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