@extends('template/base')
@section('content')
<section class="desc">
        <div class="separator">
            <h2 class="wide-spacing">Malioboro</h2>
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
<div class="half-separator"></div>
<section class="desc">
    <div class="container">
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
                            <h4 class="card-title mb-0">Budaya.</h4>
                        </div>
                    </div>
                </div>
    </div>
</div>
</section>
<div  class="container">
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
<div class="container">
    <div class="row p-30">
        <div class="img small-round-img" style="background-image:url('{{asset('assets/images/tugu.jpg')}}');"></div>
    </div>
</div>

@endsection