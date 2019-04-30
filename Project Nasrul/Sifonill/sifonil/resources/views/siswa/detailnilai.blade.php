@extends('layouts.header')

@section('content')
	<section class="content-header">
      <h1>
        Detail Nilai
        @foreach ($mapel as $map)
        	<small>{{{ $map->mapel }}}</small>
        @endforeach
      
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Detail Nilai Pelajaran</li>
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
            @foreach ($siswa as $siswa)
            	@foreach ($nilai as $nilai)
	              <h3 class="box-title">Nama : {{{ $siswa->namasiswa }}}</h3><br>
	              <h3 class="box-title">Nilai Pengetahuan : {{{ $nilai->pengetahuan }}}</h3><br>
	              <h3 class="box-title">Nilai Keterampilan : {{{ $nilai->keterampilan }}}</h3><br>
	              <h3 class="box-title">Nilai Sikap : {{{ $nilai->sikap }}}</h3><br>
	              <h3 class="box-title">Deskripsi Pengetahuan : {{{ $nilai->desc_pengetahuan }}}</h3><br>
	              <h3 class="box-title">Deskripsi Keterampilan : {{{ $nilai->desc_keterampilan }}}</h3><br>
	              <h3 class="box-title">Deskripsi Sikap : {{{ $nilai->desc_sikap }}}</h3><br>
	            @endforeach
            @endforeach
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              
            </div>
            <!-- /.box-body -->
          </div>    
        </div>
        
  
      </div>
      
      <!-- /.row (main row) -->

    </section>
@endsection