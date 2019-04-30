@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">Input Data Sparepart</div>

                @if (\Session::has('success'))
                  <div class="alert alert-success">
                    <p>{{ \Session::get('success') }}</p>
                  </div><br />
                 @endif

                <div class="card-body">
                    <form method="POST" action="{{url('spareparts')}}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="oracle_number" class="col-md-4 col-form-label text-md-right">No. Oracle</label>

                            <div class="col-md-6">
                                <input id="oracle_number" type="text" class="form-control{{ $errors->has('oracle_number') ? ' is-invalid' : '' }}" name="oracle_number" value="{{ old('oracle_number') }}" required autofocus>

                                @if ($errors->has('oracle_number'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('oracle_number') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nama Sparepart</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="stock" class="col-md-4 col-form-label text-md-right">Stok Minimal</label>

                            <div class="col-md-6">
                                <input id="min_stock" type="text" class="form-control{{ $errors->has('min_stock') ? ' is-invalid' : '' }}" name="min_stock" value="{{ old('min_stock') }}" required>

                                @if ($errors->has('min_stock'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('min_stock') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="unit" class="col-md-4 col-form-label text-md-right">Unit</label>

                            <div class="col-md-6">
                                <input id="unit" type="text" class="form-control{{ $errors->has('unit') ? ' is-invalid' : '' }}" name="unit" value="{{ old('unit') }}" required>

                                @if ($errors->has('unit'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('unit') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="price" class="col-md-4 col-form-label text-md-right">Harga Satuan</label>

                            <div class="col-md-6">
                                <input id="price" type="text" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" name="price" value="{{ old('price') }}" required>

                                @if ($errors->has('price'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label text-md-right">Gambar</label>

                            <div class="col-md-6">
                                <input id="image" type="file" class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}" name="image" required>

                                @if ($errors->has('image'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="machine_id" class="col-md-4 col-form-label text-md-right">Mesin</label>

                            <div class="col-md-6">
                              <select id="machine_id" type="text" class="form-control{{ $errors->has('machine_id') ? ' is-invalid' : '' }}" name="machine_id" value="{{ old('machine_id') }}" required>
                                @foreach ($machines as $machine)
                                  <option value="{{ $machine['id'] }}">{{$machine['name']}}</option>
                                @endforeach
                              </select>

                                @if ($errors->has('machine_id'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('machine_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Tambah Sparepart
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
