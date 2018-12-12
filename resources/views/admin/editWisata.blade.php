@extends('admin/base')
@section('content')
<section class="content">
  <!-- Small boxes (Stat box) -->
  <div class="row">
      <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Edit Wisata</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          @php
              $id = $item->id;
          @endphp
          <form role="form" method="POST" enctype='multipart/form-data' action="{{ route('admin.updateWisata', $id) }}">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="box-body">
              <div class="form-group">
                <label for="nama_wisata">Nama Wisata</label>
                <input type="text" value="{{$item->nama_wisata}}" name="nama_wisata" class="form-control" id="nama_wisata" placeholder="Masukkan Nama Wisata">
              </div>
              <div class="form-group">
                <label for="banner">Foto Wisata</label>
                <input value="{{$item->banner}}" type="file" id="banner" name="banner">
              </div>
              <div class="form-group">
                <label>Kategori</label>
                <select class="form-control select2" name="kategori_id" style="width: 100%;">

                  <option disabled selected value> -- select an option -- </option>
                  @foreach($kategori as $k)
                    <option value="{{$k->id}}" @if ($k->id == $item->kategori_id)
                        selected
                      @endif>{{$k->nama_kategori}}</option>
                  @endForeach                  
                </select>
              </div>
              <div class="form-group">
                <label for="deskripsi">Deskripsi Wisata</label>
                <textarea name="deskripsi" class="form-control" rows="5" placeholder="Masukkan Deskripsi Wisata">{{$item->deskripsi}}</textarea>
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
@endsection