@extends('template/base')
@section('content')
    <section class="header">
        <div class="container">
            <div class="row">
                <div class="black-tint"></div>
                <div class="title col-12">
                    <h1 class="text-thin">Ayo Dolan!</h1>
                </div>
                <div class="small-desc col-12">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis minus minima laborum ex iste est officiis quam in dignissimos explicabo vel rerum sit labore officia aspernatur, libero ipsa id? Corrupti?</p>
                </div>
            </div>
        </div>  
    </section>
    <section class="desc">
        <div class="separator">
            <h2 class="wide-spacing">Yogyakarta.</h2>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="img round-img" style="background-image:url('{{asset('assets/images/tugu.jpg')}}');"></div>
            <div class="row justify-content-center mt-5">
                <div class="col-md-5">
                    <p class="small-desc text-justify line-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, ratione! Quaerat cum quidem eaque doloremque consequatur ex beatae voluptas maxime minus accusamus. Labore autem pariatur id veritatis maxime illum! Voluptas. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolor placeat fuga ipsum porro, ipsam rem dicta recusandae cum nostrum tenetur in dolores, nulla totam maxime reiciendis, reprehenderit officiis blanditiis error!</p>
                </div>

            </div>
            </div>
        </div>
    </section>
    <section class="kategori">
        <div class="separator">
            <h2 class="wide-spacing">Kategori.</h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="card-deck" style="width:100%">
                    @foreach ($kategori as $data)
                    <div class="card">
                        <a href="{{ URL::to("kategori/{$data->id}/{$data->nama_kategori}") }}">
                            <div class="img" style="background-image:url('{{$data->banner}}');"></div>
                        </a>
                        <div class="card-body">
                            <a href="{{ URL::to("kategori/{$data->id}/{$data->nama_kategori}") }}">
                                <h4 class="card-title mb-0">{{$data->nama_kategori}}.</h4>
                            </a>
                        </div>
                        <div class="card-footer">
                            <h6 class="">more</h6>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <section class="kategori-extend">
        @foreach ($kategori as $data)
        <div class="half-separator"></div>
        <div class="container">
            <div class="border">
            <div class="row">
                <div class="col-sm-6">
                    <div class="col">
                        <a href="{{ URL::to("kategori/{$data->id}/{$data->nama_kategori}") }}">
                            <div class="img" style="background-image:url('{{$data->banner}}');"></div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <a href="{{ URL::to("kategori/{$data->id}/{$data->nama_kategori}") }}">
                        <h3 class="text">{{$data->nama_kategori}}.</h3>
                    </a>
                    <p class="text1">{{$data->deskripsi}}</p>
                </div>
            </div>
            </div>
        </div>
        @endforeach
        
    <div class="half-separator"></div>
@endsection