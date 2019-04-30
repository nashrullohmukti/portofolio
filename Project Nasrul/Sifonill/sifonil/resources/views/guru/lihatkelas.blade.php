@extends('layouts.header')

@section('content')
    <section class="content-header">
      <h1>
        Daftar Siswa
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Menu</a></li>
        <li class="active">Daftar Siswa</li>
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
                  <th>NIS</th>
                  <th>NISN</th>
                  <th>Nama Siswa</th>
                  <th>Jenis Kelamin</th>
                  <th>Alamat</th>
                </tr>
                </thead>
                <tbody>

                @foreach( $siswa as $value)
                  <tr>
                    <th>{{{ $value->nis }}}</th>
                    <td>{{{ $value->nisn }}}</td>
                    <td>{{{ $value->namasiswa }}}</td>
                    <td>{{{ $value->jk }}}</td>
                    <td>{{{ $value->alamat }}}</td>
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