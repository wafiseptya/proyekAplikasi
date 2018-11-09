@extends('template/base')
@section('content')
<head>
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=5iew2cq4xiayo57rrd2pmbhusyia2vaitlxekl5eqoxeh0wi"></script>
  <script>
    tinymce.init({ 
      selector:'textarea',
      extended_valid_elements: '|p|strong|img[class=myclass|!src|border:0|alt|title|width|height|style]',
    });
  </script>
</head>
<section class="kategori">
  <div class="container">
    <div class="separator1">
      <h2 class="wide-spacing">Buat Artikel</h2>
    </div>
  </div>
  <div class="container">
    <form class="form-horizontal" method="POST" enctype='multipart/form-data' action="{{ route('artikel.store') }}">
      {{ csrf_field() }}
      <input type="hidden" name="wisata_id" value="{{$id}}">
      <input type="hidden" name="users_id" value="{{$uid}}">
      <div class="form-group">
        <div class="col-md-12">
          <label for="judul_artikel" class="control-label">Judul Artikel</label>
          <input type=”text” name=judul_artikel class="form-control">
        </div>
      </div>
      <div class="form-group">
        <div class="col-md-12">
            <label for="avatar" class="control-label">Header Photo</label>
            <div class="custom-file">
                <input type="file" class="custom-file-input" name="banner">
                <label class="custom-file-label" for="banner">Choose Image</label>
            </div>
        </div>
      </div>
      <div class="form-group">
        <div class="col-md-12">
          <textarea name="isi_artikel" class="write">Write Here!</textarea>
        </div>
      </div>
      <div class="form-group">
        <div class="col-md-6 mt-3 mb-3">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </form>
  </div>
</section>
@endsection