@extends('admin/base')
@section('css')
  <link rel="stylesheet" href="{{asset('assets/vendor/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endsection
@section('content')
<section class="content">
  <!-- Small boxes (Stat box) -->
  <div class="row">
    <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Tabel Wisata</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
              @if (session('alert'))
              <div class="callout callout-success">
                  {{ session('alert') }}
              </div>
              @endif
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nama Wisata</th>
                  <th>Kategori</th>
                  <th>Jumlah Artikel</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($wisata as $w)
                      
                  <tr>
                    <td>{{$w->nama_wisata}}</td>
                    <td>{{$w->kategori->nama_kategori}}</td>
                    <td>{{$w->artikel->count()}}</td>
                    <td>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="{{ route('admin.editWisata', $w->id) }}" title="{{ trans('app.edit_title') }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a></li>
                            <li class="list-inline-item">
                                <form action="{{ route('admin.destroyWisata', $w->id) }}" method="post">
                                    <button class="btn btn-danger btn-sm" title="{{ trans('app.delete_title') }}"><i class="fa fa-trash"></i></button>
                                </form>
                            
                            </li>
                        </ul>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
    </div>
  </div>
  <!-- /.row -->
  <!-- Main row -->

</section>
@endsection
@section('js')
<script src="{{asset('assets/vendor/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/vendor/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script>
  $('#example1').DataTable()
</script>
@endsection