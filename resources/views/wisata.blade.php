@extends('template/base')
@section('content')
<section class="desc">
        <div class="separator">
        <h2 class="wide-spacing">{{$data->nama_wisata}}</h2>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="img round-img" style="background-image:url('{{$data->banner}}');"></div>
            <div class="row justify-content-center mt-5">
                <div class="col-md-5">
                    <p class="small-desc text-justify line-2">{{$data->deskripsi}}</p>
                </div>
            </div>
            </div>
            <div class="container">
              <div class="row justify-content-around">
                <div class="col-md-2 mt-5">
                  <a href="#" class="btn btn-primary btn-lg" role="button" aria-pressed="true">Buat Post</a>
                </div>
              </div>
            </div>
        </div>
</section>
<div class="half-separator"></div>
<section class="desc">
    {{-- <!-- <div class="container">
    <h3 class="wide-spacing">Related Article</h3>
    <div class="half-separator"></div>
    <div class="row">
            <div class="card-deck" style="width:100%">
                    <div class="card">
                        <div class="img" style="background-image:url('{{asset('assets/images/sejarah2.jpg')}}');"></div>
                        <div class="card-body">
                            <h4 class="card-title mb-0">Sejarah.</h4>
                        </div>
                    </div>
                    <div class="card">
                        <div class="img" style="background-image:url('{{asset('assets/images/alam.jpg')}}');"></div>
                        <div class="card-body">
                            <h4 class="card-title mb-0">Alam.</h4>
                        </div>
                    </div>
                    <div class="card">
                        <div class="img" style="background-image:url('{{asset('assets/images/kuliner1.jpg')}}');"></div>
                        <div class="card-body">
                            <h4 class="card-title mb-0">Kuliner.</h4>
                        </div>
                    </div>
                    <div class="card">
                        <div class="img" style="background-image:url('{{asset('assets/images/budaya.jpg')}}');"></div>
                        <div class="card-body">
                            <h4 class="card-title mb-0b">Budaya.</h4>
                        </div>
                    </div>
                </div>
          </div>
      </div> --> --}}
      <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
              <div class="img small-but-not-that-small-round-img mr-4" style="background-image:url('{{asset('assets/images/tugu.jpg')}}');"></div>
              <h1 class="text mt-1  ">Pengalamanku di Jogja</h1>
              <h6 class="text mt-2">Rabu, 07 November 2018</h6>
              <h6 class="text mt-2">3120 points</h6>
            </div>
          </div>
      </div>
      <div class="container mt-5">
        <div class="row justify-content-center">
        <nav aria-label="Page navigation example">
          <ul class="pagination">
      <li class="page-item"><a class="page-link" href="#">Previous</a></li>
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item"><a class="page-link" href="#">Next</a></li>
    </ul>
  </nav>
</div>
      </div>
</section>

@endsection
