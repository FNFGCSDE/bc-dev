@extends('layouts.app')


@foreach($alert as $cas)

@section('content')
@if(session()->has('message'))
    <div class="alert alert-success alert-dismissible">
        {{ session()->get('message') }}
    </div>
@endif
<h1 class="m-2 mb-4">Flyte Alerts - Alert #{{ $cas->id_alert }}</h1>
<div class="row">
  <div class="col-md-6">

<div class="card">
  <div class="card-body">
    <div class="row">
      <div class="col-md-6">
    <h2>Alert Details</h2>
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
    <h2>Client KYC</h2>
    <div class="table-responsive small">
      <table class="table table-sm">
        <?php
        $client_link = DB::table('linkworkclients')->where('cat_link1','=','alerts')->where('id_link1','=',$cas->id)->first();
        $client_id = $client_link->id_link2;
        $client_db = DB::table('clients')->where('id','=',$client_id)->first();

        ?>
        <tr>
          <td>Client Name</td>
          <td><a href="#">{{ $client_db->name }}</a></td>
        </tr>
        <tr>
          <td>DOB</td>
          <td>{{ $client_db->DOB }}</td>
        </tr>
        <tr>
          <td>Aliases</td>
          <td>{{ $client_db->aliases }}</td>
        </tr>
        <tr>
          <td>Address</td>
          <td>{{ $client_db->address1 }}</td>
        </tr>
        <tr>
          <td>City</td>
          <td>{{ $client_db->city }}</td>
        </tr>
        <tr>
          <td>Province</td>
          <td>{{ $client_db->province }}</td>
        </tr>
        <tr>
          <td>Country</td>
          <td>{{ $client_db->country }}</td>
        </tr>
        <tr>
          <td>Email</td>
          <td>{{ $client_db->phone }}</td>
        </tr>
        <tr>
          <td>Phone</td>
          <td>{{ $client_db->email }}</td>
        </tr>
    </table>
    </div>
</div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <h2>Alert Notes</h2>
        <table class="table table-striped table-sm">
          <thead class="thead-dark">
          <tr>
            <th>Date</th>
            <th>By</th>
            <th>Note</th>
          </tr>
          </thead>
        </table>
      </div>
    </div>
  </div>
</div>

</div>
  <div class="col-md-6">
    <div class="card">
      <div class="card-body">
        <h2>Quick Actions</h2>
          <form  action="{{ route('alerts.postUpdateAlert') }}" method="get" accept-charset="UTF-8">
            <div class="form-row">
            <div class="form-group col-md-2">
              <p>Change Status:</p>
            </div>
            <div class="form-group col-md-4">
              <select id="updateAlert" class="form-control"
              name="updateAlert" required>
                <option value="a" selected></option>
                <option value="b" disabled>--- CLOSE ---</option>
                <option value="0">Close</option>
                <option value="1">Submit for Manager Review</option>
                <option value="c" disabled>--- ESCALATE ---</option>
                <option value="2">Escalate</option>
                <option value="3">Submit for Manager Review</option>
                <option value="d" disabled>--- ROLL-UP ---</option>
                <option value="4">Roll-up to Alert</option>
                <option value="5">Roll-up to Case</option>
              </select>
              <select class="form-control  invisible" id="id_alert" name="id_alert">
                <option value="{{ $cas->id_alert }}">1</option>
              </select>
            </div>

            <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success">Update Status</button>
            </div>
            </div>
          </form>
          <form  action="{{ route('alerts.postAddNewNoteAlert') }}" method="get" accept-charset="UTF-8">
            <div class="form-row">
            <div class="form-group col-md-2">
              <p>Add Note:</p>
            </div>
            <div class="form-group col-md-4">
              <textarea id="inputNote" class="form-control"
              name="inputNote" required></textarea>
            </div>
            <div class="form-group col-md-4">
            <button type="submit" class="btn btn-info">Add Note</button>
            </div>
            </div>
          </form>

        <form  action="{{ route('alerts.postUpdateAlert') }}" method="get" accept-charset="UTF-8">
          <div class="form-row">
          <div class="form-group col-md-2">
            <p>Assign Alert:</p>
          </div>
          <div class="form-group col-md-4">
            <select id="inputProvince" class="form-control"
            name="inputProvince" required>
            <?php
            $user_list = DB::table('users')->get();

            ?>
            @foreach($user_list as $luser)
              <?php echo "<option>" . $luser->name . "</option>";?>
            @endforeach
            </select>
          </div>
          <div class="form-group col-md-4">
          <button type="submit" class="btn btn-secondary">Assign Alert</button>
          </div>
          </div>
        </form>
        <hr />
        <h2>Alert Actions</h2>
        <div class="table-responsive small">
          <table class="table table-striped table-sm">
            <tr>
              <td><a href="{{ route('alerts.viewUpdateAlert', ['id' => $cas->id_alert])}}" class="btn btn-primary">Change Status</a></td>
              <td><a href="#" class="btn btn-success">Submit Alert</a></td>
              <td><a href="#" class="btn btn-secondary">Roll-up Alert</a></td>
            </tr>
            <tr>
              <td><a href="#" class="btn btn-info">Link to Alert</a></td>
              <td><a href="#" class="btn btn-info">Link to Case</a></td>
              <td><a href="#" class="btn btn-info">Link to Client</a></td>
            </tr>
            <tr>
              <td><a href="#" class="btn btn-info">Multi-Link</a></td>
              <td><a href="#" class="btn btn-warning">Report Alert</a></td>
              <td><a href="#" class="btn btn-danger">Flag Alert</a></td>
            </tr>
        </table>
        </div>

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
