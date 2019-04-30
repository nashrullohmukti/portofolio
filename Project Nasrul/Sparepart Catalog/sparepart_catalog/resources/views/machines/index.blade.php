@extends('layouts.app')

@section('content_name')
  Machines
@endsection

@section('content')
@if (session('success'))
  <div class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    {{ session('success') }}
  </div>
@endif
<form action="{{ URL::to('machines/importExcel') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
  {{ csrf_field() }}
  <div class="input-group">
    <input type="file" class="form-control" name="import_file" required>
    <span class="input-group-btn">
      <button class="btn btn-primary" style="border-radius:2px;" type="submit">Import File</button>
    </span>
  </div>
</form>
<br>
<a href="{{ URL::to('machines/download/xls') }}"><button class="btn btn-primary">Download Machine (xls)</button></a>
<a href="{{ URL::to('machines/download/xlsx') }}"><button class="btn btn-primary">Download Machine (xlsx)</button></a>
<a href="{{ URL::to('machines/download/csv') }}"><button class="btn btn-primary">Download Machine (CSV)</button></a>
<a href="{{ URL::to('machines/create') }}"><button class="btn btn-primary">Add Machine</button></a>
<br><br>

<table  class="table table-striped table-bordered" id="users-table" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th>Machine Name</th>
      <th>Workcenter ID</th>
      <th>Edit</th>
      <th>Hapus</th>
    </tr>
  </thead>
  <tbody>
    @foreach($machines as $machine)
    <tr>
      <td>{{ $machine['name']}}</td>
      <td>{{ $machine['placement_id']}}</td>
      <td><a href="{{action('MachineController@edit', $machine['id'])}}" class="btn btn-primary">Edit</a></td>
      <td>
        <form action="{{action('MachineController@destroy', $machine['id'])}}" method="post">
          {{csrf_field()}}
          <input name="_method" type="hidden" value="DELETE">
          <button class="btn btn-primary" type="submit">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>


@endsection

@section('scripts')
<script type="text/javascript">
$(document).ready(function() {
    $('#users-table').DataTable();
});
</script>
@endsection
