@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">Input Data Mesin</div>

                @if (\Session::has('success'))
                  <div class="alert alert-success">
                    <p>{{ \Session::get('success') }}</p>
                  </div><br />
                 @endif

                <div class="card-body">
                    <form method="POST" action="{{url('machines')}}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nama Mesin</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="placement_id" class="col-md-4 col-form-label text-md-right">Workcenter</label>

                            <div class="col-md-6">
                                <select id="placement_id" type="text" class="form-control{{ $errors->has('placement_id') ? ' is-invalid' : '' }}" name="placement_id" value="{{ old('placement_id') }}" required>
                                    @foreach ($workcenters as $workcenter)
                                      <option value="{{ $workcenter['id'] }}">{{$workcenter['name']}}</option>
                                    @endforeach
                                </select>

                                @if ($errors->has('placement_id'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('placement_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Tambah Mesin
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
