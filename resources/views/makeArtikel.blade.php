@extends('template/base')
@section('content')
<head>
  <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
</head>
<section class="kategori">
  <div class="separator1">
    <h3 class="wide-spacing ">Artikel</h3>
  </div>
  <h4 class="text"> Tambah Artikel Baru</h4>
  <input type=”text” name=”name” class="input">
  <textarea class="write">Write Here!</textarea>
  <div class="container">
    <div class="row">
      <div class="col-md-5 mt-3 mb-3">
          <button type="button" class="btn btn-light">Submit</button>
          <button type="button" class="btn btn-light">Save</button>
      </div>
    </div>
  </div>
</section>
<!-- <html>
<head>
  <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
      <div class="separator1">
        <h2 class="wide-spacing">Artikel</h2>
        </div>
        <h3 class="text">Buat Artikel Baru</h3>
        <input type=”text” name=”name” class="input">
    </div>
    </div>
  </div>
<section class="desc">
<div class="container">
  <div class="row">
    <div class="col-md-12">
    <div class="separator1">
      <textarea style="width: 100%; height: 300px; display: block">Next, get a free Tiny Cloud API key!</textarea>
    </div>
  </div>
  </div>
</div>
</section>
</body>
</html> -->
