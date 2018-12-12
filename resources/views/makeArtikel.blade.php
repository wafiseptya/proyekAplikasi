@extends('template/base')
@section('content')
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
          <input type="text" id="judul_artikel" name=judul_artikel placeholder="Masukkan Judul Artikel" class="form-control">
        </div>
      </div>
      <div class="form-group">
        <div class="col-md-12">
            <label for="avatar" class="control-label">Header Photo</label>
            <div class="custom-file">
                <input type="file" id="inputFile" class="custom-file-input" name="banner">
                <label class="custom-file-label" for="inputFile">Choose Image</label>
            </div>
        </div>
      </div>
      <div class="form-group">
        <div class="col-md-12">
          <label for="isi_artikel" class="control-label">Isi Artikel</label>
          <textarea id="isi_artikel" name="isi_artikel" class="write" placeholder="Write Here!"></textarea>
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
@section('js')
<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=5iew2cq4xiayo57rrd2pmbhusyia2vaitlxekl5eqoxeh0wi"></script>
<script>
  tinymce.init({ 
    selector:'textarea',
    extended_valid_elements: '|p|b|img[class=myclass|!src|border:0|alt|title|width|height|style]',
  });
</script>
<script>
  $('#inputFile').on('change',function(){
    //get the file name
    var fileName = document.getElementById("inputFile").files[0].name;
    //replace the "Choose a file" label
    $(this).next('.custom-file-label').html(fileName);
  })
</script>
@endsection