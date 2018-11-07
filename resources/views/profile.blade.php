@extends('template/base')
@section('content')
<section class="banner" style="background-image: url('{{asset('assets/images/yogyakarta.jpg')}}')">
  <div class="row justify-content-center">
      <div class="img-banner round-img" style="background-image:url('{{asset('assets/images/tugu.jpg')}}');"></div>
  </div>
</section>
<div class="half-separator"></div>
  <div class="container border rounded">
    <div class="row">
      <div class="col-md-10 mr-5">
        <h2 class="text">Data Diri</h2>
        <h3 class="text mt-3">Nama</h3>
        <h6 class="text mt-3">TTL Maybe</h6>
      </div>
      <div class="col-md-1">
        <a href="#" class="btn btn-primary btn-lg" role="button" aria-pressed="true">Update</a>
      </div>
    </div>
  </div>
<div class="half-separator"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12 border rounded">
        <div class="img small-but-not-that-small-round-img mr-4" style="background-image:url('{{asset('assets/images/tugu.jpg')}}');"></div>
        <h1 class="text mt-1  ">Pengalamanku di Jogja</h1>
        <h6 class="text mt-2">Rabu, 07 November 2018</h6>
        <h6 class="text mt-2">3120 points</h6>
      </div>
      <div class="col-md-12 mt-5 border rounded">
        <div class="img small-but-not-that-small-round-img mr-4" style="background-image:url('{{asset('assets/images/tugu.jpg')}}');"></div>
        <h1 class="text mt-1  ">Pengalamanku di Jogja</h1>
        <h6 class="text mt-2">Rabu, 07 November 2018</h6>
        <h6 class="text mt-2">3120 points</h6>
      </div>
      </div>
      </div>
    </div>
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

@endsection
