@extends('layouts.app')

@section('content')
<h1>Flyte Cases - Users</h1>
@foreach($user as $cas)
<?php

?>
<div class="row">
  <div class="col-md-12">
<div class="card">
  <div class="card-body">
    <h2>User #{{ $cas->id }} Details</h2>
    <div class="table-responsive small">
      <table class="table table-sm">
        <tr>
          <td>Case #</td>
          <td>{{ $cas->name }}</td>
        </tr>
        <tr>
          <td>Status</td>
          <td>{{ $cas->email }}</td>
        </tr>
        <tr>
          <td>Role</td>
          <td>tbd</td>
        </tr>
        <tr>
          <td>Reports To</td>
          <td>tbd</td>
        </tr>
    </table>
    </div>
  </div>
</div>
</div>

</div>
@endforeach
@endsection
