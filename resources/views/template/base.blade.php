<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ayo Dolan!</title>

        {{-- CSS HERE --}}
        <link rel="stylesheet" href="{{asset('assets/css/ayodolan.main.css')}}">
        {{-- bootstrap  --}}
        <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap/bootstrap.min.css')}}">
        {{-- normalize --}}
        <link rel="stylesheet" href="{{asset('assets/css/normalize.css')}}">

        {{-- FONT HERE --}}
        <link href="https://fonts.googleapis.com/css?family=Lato:100,200,400|Montserrat:200,400,600" rel="stylesheet">

    </head>
    <body>
        <section class="header">
            <div class="container">
                <div class="row">
                    <div class="black-tint"></div>
                    <div class="title col-12">
                        <h1 class="text-thin">Ayo Dolan!</h1>
                    </div>
                    <div class="desc col-12">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis minus minima laborum ex iste est officiis quam in dignissimos explicabo vel rerum sit labore officia aspernatur, libero ipsa id? Corrupti?</p>
                    </div>
                </div>
            </div>  
        </section>
        <section class="kategori">
            <div class="separator">
                <h2>Kategori.</h2>
                <div class="line"></div>
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
            <div class="separator"></div>
            <div class="container">
                <div class="row">
                    <div class="col sm-6">
                        <div class="border">
                            <h3 id="text">Sejarah</h3>
                            <p id="text1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            <h6 id="text">Wisata sejarah!!</h6>
                        </div>
                    </div>
                    <div class="col sm-6">
                        <div class="col">
                            <div class="img" style="background-image:url('{{asset('assets/images/budaya.jpg')}}');"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="separator"></div>
            <div class="container">
                <div class="border">
                <div class="row">
                    <div class="col sm-6">
                    <div class="col">
                        <div class="img" style="background-image:url('{{asset('assets/images/budaya.jpg')}}');"></div>
                    </div>
                </div>
                    <div class="col sm-6">
                        <h3 id="text">Alam</h3>
                        <p id="text1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        <h6 id="text">Wisata alam!!</h6>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="separator"></div>
            <div class="container">
                <div class="row">
                    <div class="col sm-6">
                        <div class="border">
                            <h3 id="text">Kuliner</h3>
                                <p id="text1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            <h6 id="text">Wisata kuliner!!</h6>
                        </div>
                    </div>
                    <div class="col sm-6">
                        <div class="col">
                            <div class="img" style="background-image:url('{{asset('assets/images/budaya.jpg')}}');"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="separator"></div>
            <div class="container">
                <div class="row">
                    <div class="col sm-6">
                        <div class="col">
                            <div class="img" style="background-image:url('{{asset('assets/images/budaya.jpg')}}');"></div>
                        </div>
                    </div>
                    <div class="col sm-6">
                        <div class="border">
                            <h3 id="text">Budaya</h3>
                            <p id="text1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            <h6 id="text">Wisata budaya!!</h6>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <div class="separator"></div>
        
    </body>
    <!-- jquery -->
    <script src="{{asset('assets/vendor/jquery/dist/jquery.min.js')}}"></script>
    {{-- SCRIPT HERE --}}
    <script src="{{asset('assets/js/main.js')}}"></script>
    <!-- bootstrap -->
    <script src="{{asset('assets/vendor/bootstrap/bootstrap.min.js')}}"></script>
    {{-- nicescroll --}}
    <script src="{{asset('assets/vendor/nicescroll/jquery.nicescroll.min.js')}}"></script>
</html>