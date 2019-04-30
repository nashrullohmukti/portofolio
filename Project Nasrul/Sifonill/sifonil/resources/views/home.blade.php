@extends('layouts.header')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Anda telah login sebagai : </div>

                <div class="panel-body">
                    Nama    : {{{ Auth::user()->name }}} <br>
                    User ID : {{{ Auth::user()->userid }}} <br>
                    Akses   : {{{ Auth::user()->akses }}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
