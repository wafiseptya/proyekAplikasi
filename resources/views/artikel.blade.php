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
  <div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
          <div class="img small-round-img mr-4" style="background-image:url('{{asset('assets/images/ava.jpg')}}');"></div>
          <h5 class="text ">Maida</h5>
          <h6 class="text">Rabu, 07 November 2018</h6>
          <h6 class="text">3120 points</h6>
        </div>
      </div>
  </div>
  <div class="container">
    <div class="row ">
      <div class="col-md-12 mt-5">
        <h1 class="test mb-5">Pengalamanku di Yogyakarta</h1>
        <div class="img mb-4" style="background-image:url('{{asset('assets/images/tugu.jpg')}}');"></div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-11">
          <p class="text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

        </div>
      </div>

    </div>
  </div>
   <div class="container pt-5">
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



</section>

<div  class="container pt-5">
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
<div class="separator"></div>
