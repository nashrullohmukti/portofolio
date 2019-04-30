 @extends('layouts.header')

@section('content')
    <section class="content-header">
      <h1>
        Daftar Kelas
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Menu</a></li>
        <li class="active">Daftar Kelas</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        @foreach ($kelas as $kelas)
        	<div class="col-lg-3 col-xs-6">
        	  <!-- small box -->
        	  <div class="small-box bg-aqua">
        	    <div class="inner">
        	      <h3>{{{ $kelas->idkelas }}}</h3>
        	      <p>{{{ $kelas->idjurusan }}}</p>
        	    </div>
        	    <div class="icon">
        	      <i class="ion ion-clipboard"></i>
        	    </div>
        	    	<a href="/kosongkannilai/{{{ $kelas->idkelas }}}/{{{ $kelas->idmapel }}}" class="small-box-footer">Kosongkan Nilai Kelas <i class="fa fa-arrow-circle-right"></i></a>
        	  </div>
        	  <!-- small box -->
        	</div>
        @endforeach
      
      </div>
    </section>
    <!-- /.content -->
@endsection