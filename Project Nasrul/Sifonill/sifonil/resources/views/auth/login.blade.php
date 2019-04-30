@extends('layouts.app')

@section('content')
<div class="landingpage">
    <h1 class="judul">Aplikasi Nilai Rapot</h1>
    <h2 class="sub-judul">Kurikulum 2013 SMKN 1 Cimahi</h2>
    <div class="textnya">
        <p>&emsp; Aplikasi Nilai Rapot Kurikulum 2013 SMKN 1 Cimahi adalah aplikasi yang  dibuat untuk memudahkan proses perekapan nilai dan penyampaian informasi nilai. SMKN
        1 Cimahi merupakan salah satu sekolah yang menerapkan sistem pendidikan kurikulum 2013. Dengan adanya aplikasi ini, proses perekapan dan penyampaian informasi nilai 
        menjadi mudah, cepat dan tepat.</p>
    </div>
    <h2 class="foot">&copy; 2017 | SMKN 1 Cimahi | Sifonil | Editted by : M Nashrulloh Mukti</h2>
</div>
<div class="container" style="float:left; margin:75px 0px 0px 50px;">

    <div class="card"></div>
    <div class="card">
        <h1 class="title">Login User</h1>
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
        {{ csrf_field() }}
            <div class="input-container" class="form-group{{{ $errors->has('userid') ? ' has-error' : '' }}}">
                <input id="userid" type="text" name="userid" value="{{ old('userid') }}" required>
                    @if ($errors->has('userid'))
                        <span class="help-block">
                            <strong>{{ $errors->first('userid') }}</strong>
                        </span>
                    @endif
                <label for="userid">User ID (NIP/NIS)</label>
                <div class="bar"></div>
            </div>
            <div class="input-container" class="form-group{{{ $errors->has('password') ? ' has-error' : '' }}}">
                <input id="password" type="password" name="password" required>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                <label for="password">Password</label>
                <div class="bar"></div>
            </div>
            <div class="button-container">
                <!-- <a class="btn btn-link" href="{{ url('/password/reset') }}">
                    Forgot Your Password?
                </a> -->
                <button style="submit"><span>Masuk</span></button>
            </div>
        </form>
    </div>
</div>
@endsection



