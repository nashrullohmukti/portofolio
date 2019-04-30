@extends('layouts.header')

@section('content')
    <section class="content-header">
      <h1>
        Nilai Siswa
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Menu</a></li>
        <li class="active">Nilai Siswa</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
      @foreach ($nilai as $nilai)
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>{{{ $nilai->pengetahuan }}} | {{{ $nilai->keterampilan }}} </h3>

              <p>{{{ $nilai->idmapel }}}</p>
            </div>
            <div class="icon">
              <i class="ion ion-clipboard"></i>
            </div>
            <a href="/detailnilai/{{{ $nilai->idmapel }}}/{{{ Auth::user()->userid }}}" class="small-box-footer">Nilai Kelas <i class="fa fa-arrow-circle-right"></i></a>
          </div>
          <!-- small box -->
        </div>
        @endforeach
      </div>
    </section>
    <!-- /.content -->
@endsection