@extends('layouts.header')

@section('content')
    <section class="content-header">
      <h1>
        Daftar Nilai Siswa
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Menu</a></li>
        <li class="active">Daftar Nilai Siswa</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
      <div class="col-md-12">
      </div>
      </div>
      <div class="row">
        <div class="col-md-12">
        <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <table id="satu" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nama Siswa</th>
                  <th>Pengetahuan</th>
                  <th>Keterampilan</th>
                  <th>Sikap</th>
                  <th>Deskripsi Pengetahuan</th>
                  <th>Deskripsi Keterampilan</th>
                  <th>Deskripsi Sikap</th>
                  <th>Operator</th>
                </tr>
                </thead>
                <tbody>

                @foreach( $siswa as $value)
                  <tr>
                      <form method="POST" action="/updatenilai/{{{ $value->idmapel }}}/{{{ $value->nis }}}">
                      {{ csrf_field() }}
                      {{{ method_field('PATCH') }}}
                      <th>{{{ $value->namasiswa }}}</th>
                      <td><input type="text" class="form-control" name="pengetahuan" value="{{{ $value->pengetahuan }}}"></td>
                      <td><input type="text" class="form-control" name="keterampilan" value="{{{ $value->keterampilan }}}"></td>
                      <td><input type="text" class="form-control" name="sikap" value="{{{ $value->sikap }}}"></td>
                      <td><input type="text" class="form-control" name="desc_pengetahuan" value="{{{ $value->desc_pengetahuan }}}"></td>
                      <td><input type="text" class="form-control" name="desc_keterampilan" value="{{{ $value->desc_keterampilan }}}"></td>
                      <td><input type="text" class="form-control" name="desc_sikap" value="{{{ $value->desc_sikap }}}"></td>
                      <td><input type="submit" class="form-control" value="Update Data"></td>
                      </form>
                  </tr>
                @endforeach               
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>    
        </div>
        
  
      </div>
      
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->

@stop

@push('script-head')


<script>
  $(function () {
    $("#satu").DataTable();
    
  });
</script>
<!-- Bootstrap 3.3.6 -->
<!-- SlimScroll -->
<!-- page script -->

@endpush