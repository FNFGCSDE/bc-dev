@extends('layouts.app')

@section('content')
<h1>Flyte Cases - Upload Transactions</h1>
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
<div class="card">
  <div class="card-body">
    <div class="card-title">
        <strong><p class="h3">Uploading New Transaction Set</p></strong>
        <p class="h6">Step 1: Upload the transaction set in CSV.</p>
        <p class="h6">Step 2: Run the 'Monitor Transactions' function to generate new alerts (if found).</p>
        <!-- Button trigger modal -->

    </div>
    <hr />
    <div class="container-fluid">
      <form action="{{ route('transactions.postUploadTxnsets') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="image">Example file input</label>
          <input type="file" name="txnset" class="form-control-file" id="txnset">
        </div>
        <button type="submit" class="btn btn-primary">Upload</button>
      </form>
    </div>
    <hr />

  </div>
</div>
<hr>
<div class="card">
  <div class="card-body">
    <div class="card-title">
        <strong><p class="h3">Transaction Sets to be Monitored</p></strong>
        <p class="h6">Step 2: Run the 'Monitor Transactions' function to generate new alerts (if found).</p>
        <!-- Button trigger modal -->
        <hr />
        <a type="button" class="btn btn-success" href="{{ route('transactions.postRunTriage')}}">
          <span style="color: white;">2. Monitor Transactions</span>
        </a>
        <hr />
    </div>
  </div>
  <div class="card-body">
      <?php



      ?>

      <div class="table-responsive small">
          <table class="table table-bordered table-sm" id="dataTable">
            <thead class="thead-dark">
            <tr>
              <th>Txnset #</th>
              <th>Status</th>
            </tr>
            </thead>
            <?php
              $openTxnsets = DB::table('txnsets')->where('triaged', '=', '0')->get();
            ?>
          @foreach($openTxnsets as $openTxnset)
          <?php
                $id_txnset = $openTxnset->id_txnset;
                $triaged = $openTxnset->triaged;
          ?>
              <tr>
                <td>{{ $id_txnset }}</td>
                <td>{{ $triaged }}</td>
              </tr>
          @endforeach
        </table>
      </div>
  </div>
</div>
@endsection
