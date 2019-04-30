@extends('layouts.app')

@section('content_name')
  Spareparts
@endsection

@section('content')
    @if (session('success'))
      <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        {{ session('success') }}
      </div>
    @endif
    <table  class="table table-striped table-bordered" id="users-table" cellspacing="0" width="100%">
      <thead>
        <tr>
          <th >No. Oracle</th>
          <th >Nama</th>
          <th >Minimal Stock</th>
          <th >Harga Satuan</th>
          <th >Gambar</th>
          <th >ID Mesin</th>
          <th >Edit</th>
          <th >Hapus</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($spareparts as $sparepart)
        <tr>
          <td>{{ $sparepart['oracle_number'] }}</td>
          <td>{{ $sparepart['name'] }}</td>
          <td>{{ $sparepart['min_stock'] }}</td>
          <td>{{ $sparepart['price'] }}</td>
          <td>{{ $sparepart['image'] }}</td>
          <td>{{ $sparepart['machine_id'] }}</td>
          <td>
            <a href="{{action('SparepartController@edit', $sparepart['id'])}}" class="btn btn-primary">Edit</a>
          </td>
          <td>
            <form action="{{action('SparepartController@destroy', $sparepart['id'])}}" method="post">
              {{csrf_field()}}
              <input name="_method" type="hidden" value="DELETE">
              <button class="btn btn-primary" type="submit">Delete</button>
            </form>
          </td>
        </tr>
        @endforeach
    </tbody>
    </table>

    <a href="/spareparts/create">
      <button class="btn btn-primary " type="submit">Add Sparepart <em class="fa fa-plus"></em></button>
    </a>
@endsection

@section('scripts')
<script type="text/javascript">
    $(document).ready(function() {
        $('#users-table').DataTable();
    });
</script>
@endsection
