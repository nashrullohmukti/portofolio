@extends('layouts.app_teknisi')

@section('content_name')
  Spareparts Catalog
@endsection

@section('content')
<!-- <div class="container gallery-container"> -->
    <form action="{{ url('search') }}">
      <div class="input-group">
          <input type="text" class="form-control" name="query" placeholder="Search for...">
          <span class="input-group-btn">
            <button class="btn btn-primary" style="border-radius:2px;"type="button">Go!</button>
          </span>
      </div>
    </form>
    @if (count($spareparts ))
    <p class="page-description text-center">Hasil pencarian : <b>{{$query}}</b></p>
    <div class="tz-gallery">
        <div class="row">
          @foreach($spareparts as $sparepart)
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a class="lightbox" href="/uploads/{{ $sparepart['image'] }}">
                        <img src="/uploads/{{ $sparepart['image'] }}" alt="{{ $sparepart['image']}}" width="100%">
                    </a>
                    <div class="caption">
                        <h3>{{ $sparepart['oracle_number'] }} - {{ $sparepart['name'] }}</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
          @endforeach
        </div>
        {{ $spareparts->links('layouts.pagination') }}
    </div>
    @else
      <p class="page-description text-center">Oops.. Data <b>{{$query}}</b> Tidak Ditemukan</b></p>
    @endif
<!-- </div> -->

@endsection
