@extends('template/base')
@section('content')
<section class="header" style="background-image: url('{{asset('assets/images/timang.jpg')}}')">
    <div class="container">
        <div class="row">
            <div class="black-tint"></div>
            <div class="title col-12">
                <h1 class="text-thin">category name.</h1>
            </div>
        </div>
    </div>  
</section>
<section class="kategori">
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
</section>

@endsection