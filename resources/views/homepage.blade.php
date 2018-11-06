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
                <div class="col-md-8">
                    <p class="small-desc text-justify line-2">Yogyakarta adalah kota yang mempunyai banyak predikat seperti
kota budaya, kota perjuangan, kota gudeg, kota sepeda, kota pelajar dan
lain sebagainya. Predikat-predikat tersebut diperoleh karena pada kenyataannya
apa yang disebut dengan mudah ditemui di kota ini. Disebut
sebagai kota budaya karena di samping terdapat Kraton Kasultanan yang
hingga kini masih eksis sebagai benteng budaya Jawa, juga banyak peristiwa
budaya dan pentas seni baik tradisional maupun kontemporer digelar.1
 Lebih dari itu, peristiwa-peristiwa budaya tersebut telah masuk
dalam kalender kegiatan budaya di Yogyakarta. Disebut sebagai kota
perjuangan karena kota ini pernah menjadi basis perjuangan untuk mempertahankan
kemerdekaan, dengan demikian kini Yogyakarta dan sekitarnya
masih banyak ditemui peninggalan sejarah perjuangan dan bahkan
sejarah bangsa sebelum masa kolonial. Kuliner khas Yogyakarta, yaitu
gudeg dapat dinikmati setiap saat selama 24 jam di berbagai sudut kota.
Sepeda sebagai alternatif alat transportasi rakyat yang murah dan sehat
dapat dilihat setiap hari memenuhi jalan di pinggiran kota. Yogyakarta
juga merupakan kota tempat para pemuda dari berbagai daerah di
Indonesia bahkan dari mancanegara berkumpul untuk belajar di berbagai
perguruan tinggi. </p>
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
                    <div class="card">
                        <div class="img" style="background-image:url('{{asset('assets/images/sejarah2.jpg')}}');"></div>
                        <div class="card-body">
                            <h4 class="card-title mb-0">Sejarah.</h4>
                        </div>
                        <div class="card-footer">
                            <h6 class="">more</h6>
                        </div>
                    </div>
                    <div class="card">
                        <div class="img" style="background-image:url('{{asset('assets/images/alam.jpg')}}');"></div>
                        <div class="card-body">
                            <h4 class="card-title mb-0">Alam.</h4>
                        </div>
                        <div class="card-footer">
                            <h6 class="">more</h6>
                        </div>
                    </div>
                    <div class="card">
                            <div class="img" style="background-image:url('{{asset('assets/images/kuliner1.jpg')}}');"></div>
                            <div class="card-body">
                            <h4 class="card-title mb-0">Kuliner.</h4>
                        </div>
                        <div class="card-footer">
                            <h6 class="">more</h6>
                        </div>
                    </div>
                    <div class="card">
                            <div class="img" style="background-image:url('{{asset('assets/images/budaya.jpg')}}');"></div>
                            <div class="card-body">
                            <h4 class="card-title mb-0">Budaya.</h4>
                        </div>
                        <div class="card-footer">
                            <h6 class="">more</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="kategori-extend">
        <div class="half-separator"></div>
        <div class="container">
            <div class="border">
            <div class="row">
                <div class="col-sm-6">
                <div class="col">
                    <div class="img" style="background-image:url('{{asset('assets/images/budaya.jpg')}}');"></div>
                </div>
            </div>
                <div class="col-sm-6">
                    <h3 class="text">Budaya.</h3>
                    <p class="text1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    <h6 class="text">Wisata alam!!</h6>
                </div>
                </div>
            </div>
        </div>

        <div class="half-separator"></div>
        <div class="container">
            <div class="border">
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="text">Alam</h3>
                    <p class="text1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    <h6 class="text">Wisata alam!!</h6>
                </div>
                <div class="col-sm-6">
                    <div class="col">
                        <div class="img" style="background-image:url('{{asset('assets/images/pantai.jpg')}}');"></div>
                    </div>
                </div>
            </div>
            </div>
        </div>

        <div class="half-separator"></div>
        <div class="container">
            <div class="border">
            <div class="row">
                <div class="col sm-6">
                    <div class="col">
                        <div class="img" style="background-image:url('{{asset('assets/images/kuliner1.jpg')}}');"></div>
                    </div>
                </div>
                <div class="col sm-6">
                    <h3 class="text">Kuliner</h3>
                    <p class="text1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    <h6 class="text">Wisata alam!!</h6>
                </div>
            </div>
            </div>
        </div>

        <div class="half-separator"></div>
        <div class="container">
            <div class="border">
            <div class="row">
                <div class="col sm-6">
                    <h3 class="text">Perbelanjaan</h3>
                    <p class="text1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    <h6 class="text">Wisata alam!!</h6>
                </div>
                <div class="col sm-6">
                    <div class="col">
                        <div class="img" style="background-image:url('{{asset('assets/images/budaya.jpg')}}');"></div>
                    </div>
                </div>
            </div>
            </div>
        </div>

    </section>

    <div class="separator"></div>
@endsection
