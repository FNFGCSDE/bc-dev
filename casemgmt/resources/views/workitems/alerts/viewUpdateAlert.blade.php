@extends('layouts.app')

@section('content')
<h1>Flyte Alerts</h1>
@foreach($alert as $cas)
<?php

?>
<div class="row">
  <div class="col-md-6">

<div class="card">
  <div class="card-body">
    <div class="row">
      <div class="col-md-6">
    <h2>Alert #{{ $cas->id_alert }} Details</h2>
    <div class="table-responsive small">
      <table class="table table-sm">
        <tr>
          <td>Alert #</td>
          <td>{{ $cas->id_alert }}</td>
        </tr>
        <tr>
          <td>Status</td>
          <td>{{ $cas->status }}</td>
        </tr>
        <tr>
          <td>Outcome</td>
          <td>{{ $cas->outcome }}</td>
        </tr>
        <tr>
          <td>Assigned To</td>
          <td>{{ $cas->id_assignedto }}</td>
        </tr>
        <tr>
          <td>Date Opened</td>
          <td>{{ $cas->date_opened }}</td>
        </tr>
        <tr>
          <td>Date Submitted</td>
          <td>{{ $cas->date_submitted }}</td>
        </tr>
        <tr>
          <td>Date Approved</td>
          <td>{{ $cas->date_approved }}</td>
        </tr>
        <tr>
          <td>Date Closed</td>
          <td>{{ $cas->date_closed }}</td>
        </tr>
        <tr>
          <td>Source</td>
          <td>{{ $cas->source }}</td>
        </tr>
    </table>
    </div>
  </div>
  <div class="col-md-6">
    <h2>Alert #{{ $cas->id_alert }} Client KYC</h2>
    <div class="table-responsive small">
      <table class="table table-sm">
        <tr>
          <td>Alert #</td>
          <td>{{ $cas->id_alert }}</td>
        </tr>
        <tr>
          <td>Status</td>
          <td>{{ $cas->status }}</td>
        </tr>
        <tr>
          <td>Outcome</td>
          <td>{{ $cas->outcome }}</td>
        </tr>
        <tr>
          <td>Assigned To</td>
          <td>{{ $cas->id_assignedto }}</td>
        </tr>
        <tr>
          <td>Date Opened</td>
          <td>{{ $cas->date_opened }}</td>
        </tr>
        <tr>
          <td>Date Submitted</td>
          <td>{{ $cas->date_submitted }}</td>
        </tr>
        <tr>
          <td>Date Approved</td>
          <td>{{ $cas->date_approved }}</td>
        </tr>
        <tr>
          <td>Date Closed</td>
          <td>{{ $cas->date_closed }}</td>
        </tr>
        <tr>
          <td>Source</td>
          <td>{{ $cas->source }}</td>
        </tr>
    </table>
    </div>
</div>
    </div>
  </div>
</div>

</div>
  <div class="col-md-6">
    <div class="card">
      <div class="card-body">
        <h2>Update Alert Status</h2>
          <form  action="{{ route('alerts.postUpdateAlert') }}" method="get" accept-charset="UTF-8">
            <div class="row">
            <div class="form-group col-md-4">
              <label for="inputProvince">Status</label>
              <select id="inputProvince" class="form-control"
              name="inputProvince" required>
                <option selected>Open (current)</option>
                <option>Manager Review</option>
                <option>Closed</option>
              </select>
            </div>
            <div class="form-group col-md-4">
              <label for="inputProvince">Status</label>
              <select id="inputProvince" class="form-control"
              name="inputProvince" required>
                <option selected>Open (current)</option>
                <option>Manager Review</option>
                <option>Closed</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-4">
            <button type="submit" class="btn btn-primary">Update Alert</button>
          </div>
        </div>
          </form>
    </div>
  </div>
</div>
</div>
<hr />
<hr />
<div class="row">
  <div class="col-md-6">
    <div class="card">
      <div class="card-body">
    <h2>Alert History</h2>
    <div class="table-responsive small">
      <table class="table table-striped table-sm">
        <thead class="thead-dark">
        <tr>
          <th>Date</th>
          <th>Event</th>
        </tr>
        </thead>
    </table>
    </div>
  </div>
</div>
  </div>
    <div class="col-md-6">

      <div class="card">
        <div class="card-body">
        <h2>Related Work Items</h2>
    <div class="table-responsive small">
      <table class="table table-striped table-sm">
        <thead class="thead-dark">
        <tr>
          <th>Invoice #</th>
          <th>Team Member</th>
          <th>Program</th>
          <th>Date Worked</th>
          <th>Position</th>
          <th>Rate</th>
          <th>Hours</th>
          <th>Per Diem</th>
          <th>KMs</th>
          <th>Total Rate</th>
        </tr>
        </thead>
    </table>
    </div>
  </div>
</div>
</div>

  </div>
<hr />
<div class="row">
<div class="col-md-12">
<div class="card">
  <div class="card-body">
    <h2>Alert Transactions</h2>
    <div class="table-responsive small">
      <table class="table table-striped table-sm">
        <thead class="thead-dark">
        <tr>
          <th>Invoice #</th>
          <th>Team Member</th>
          <th>Program</th>
          <th>Date Worked</th>
          <th>Position</th>
          <th>Rate</th>
          <th>Hours</th>
          <th>Per Diem</th>
          <th>KMs</th>
          <th>Total Rate</th>
        </tr>
        </thead>
    </table>
    </div>
  </div>
</div>
</div>
</div>
<hr />
<div class="row">
<div class="col-md-12">
<div class="card">
  <div class="card-body">
    <h2>Documents</h2>
    <div class="table-responsive small">
      <table class="table table-striped table-sm">
        <thead class="thead-dark">
        <tr>
          <th>Invoice #</th>
          <th>Team Member</th>
          <th>Program</th>
          <th>Date Worked</th>
          <th>Position</th>
          <th>Rate</th>
          <th>Hours</th>
          <th>Per Diem</th>
          <th>KMs</th>
          <th>Total Rate</th>
        </tr>
        </thead>
    </table>
    </div>
  </div>
</div>
</div>
</div>

</div>

@endforeach
@endsection
