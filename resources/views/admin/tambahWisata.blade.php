@extends('admin/base')
@section('content')
<section class="content">
  <!-- Small boxes (Stat box) -->
  <div class="row">
      <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Tambah Wisata</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form role="form" method="POST" enctype='multipart/form-data' action="{{ route('admin.storeWisata') }}">
            {{ csrf_field() }}
            <div class="box-body">
              <div class="form-group">
                <label for="nama_wisata">Nama Wisata</label>
                <input type="text" name="nama_wisata" class="form-control" id="nama_wisata" placeholder="Masukkan Nama Wisata">
              </div>
              <div class="form-group">
                <label for="banner">Foto Wisata</label>
                <input type="file" id="banner" name="banner">
              </div>
              <div class="form-group">
                <label>Kategori</label>
                <select class="form-control select2" name="kategori_id" style="width: 100%;">
                  <option disabled selected value> -- select an option -- </option>
                  @foreach($kategori as $k)
                    <option value="{{$k->id}}">{{$k->nama_kategori}}</option>
                  @endForeach                  
                </select>
              </div>
              <div class="form-group">
                <label for="deskripsi">Deskripsi Wisata</label>
                <textarea name="deskripsi" class="write" placeholder="Masukkan Deskripsi Wisata"></textarea>
              </div>
            </div>
            <!-- /.box-body -->

            <div class="box-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
        <!-- /.box -->
  </div>
  <!-- /.row -->
  <!-- Main row -->

</section>
@endsection
@section('js')
<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=5iew2cq4xiayo57rrd2pmbhusyia2vaitlxekl5eqoxeh0wi"></script>
<script>
  tinymce.init({ 
    selector:'textarea',
    height: 200,
    extended_valid_elements: '|p|b|img[class=myclass|!src|border:0|alt|title|width|height|style]',
  });
</script>
@endsection