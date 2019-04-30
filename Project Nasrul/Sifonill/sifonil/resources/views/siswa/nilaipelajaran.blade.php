@extends('layouts.header')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Pelajaran

        @foreach ($mapel as $map)
        <small>{{{ $map->mapel }}}</small>
        @endforeach
      
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Lihat Data Nilai Pelajaran</li>
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
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="satu" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>NIS</th>
                  <th>Nama Siswa</th>
                  <th>Pengetahuan</th>
                  <th>Keterampilan</th>
                  <th>Sikap</th>
                </tr>
                </thead>
                <tbody>

                @foreach( $nilai as $value)
                  <tr>
                    <td>{{{ $value->nis }}}</td>
                    <td>{{{ $value->namasiswa }}}</td>
                    <td>{{{ $value->pengetahuan }}}</td>
                    <th>{{{ $value->keterampilan }}}</th>
                    <th>{{{ $value->sikap }}}</th>
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