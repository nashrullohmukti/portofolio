@extends('layouts.header')

@section('content')
    <section class="content-header">
      <h1>
        Daftar Pelajaran
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Menu</a></li>
        <li class="active">Daftar Pelajaran</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        @foreach ($mapel as $mapel)
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>{{{ $mapel->idmapel }}}</h3>
              <p>{{{ $mapel->mapel }}}</p>
            </div>
            <div class="icon">
              <i class="ion ion-clipboard"></i>
            </div>
            @foreach ($kelas as $kelas)
            <a href="/nilaipelajaran/{{{ $mapel->idmapel }}}/{{{ $kelas->idkelas }}}" class="small-box-footer">Lihat Nilai Kelas <i class="fa fa-arrow-circle-right"></i></a>
            @endforeach
          </div>
          <!-- small box -->
        </div>
        @endforeach
      </div>
    </section>
    <!-- /.content -->
@endsection