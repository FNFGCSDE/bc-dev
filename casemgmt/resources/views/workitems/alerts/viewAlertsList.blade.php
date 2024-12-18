@extends('layouts.app')

@section('content')
<h1>View Alerts</h1>
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
<div class="card">
  <div class="card-body">
    <div class="card-title">
      <div class="row">
        <div class="col-md-8">
        <strong><p class="h3">All Alert List</p></strong>
      </div>
      <div class="col-md-1">
        <button class="btn btn-info" id="editButton">Edit Alerts</button>
      </div>
      <div class="col-md-1">
        <button class="btn btn-secondary" id="editButton">Edit Selected</button>
      </div>
      <div class="col-md-1">
        <button class="btn btn-warning" id="editButton">Export All</button>
      </div>
      <div class="col-md-1">
        <button class="btn btn-success" id="editButton">Export Selected</button>
      </div>
    </div>
      <hr />

      <div class="container-fluid">
        <div class="table-responsive small">
          <table class="table table-striped table-sm" id="primeTable" name="primeTable">
            <thead class="thead-light">
            <tr>
              <th id="headerTableID" name="headerTableID">ID</th>
              <th id="headerTableSource" name="headerTableSource">Source <br /></th>
              <th id="headerTableStatus" name="headerTableStatus">Status  <br /></th>
              <th id="headerTableAT" name="headerTableAT">Assigned To</th>
              <th id="headerTableOpen" name="headerTableOpen">Date Opened</th>
              <th id="headerTableAge" name="headerTableAge">Age (Days)</th>
              <th id="headerTableOutcome" name="headerTableOutcome">Outcome</th>
            </tr>
            </thead>
            <tbody>
            <?php
                $alerts = DB::table('alerts')->get();

            ?>
                @foreach($alerts as $icase)
                <?php
                  $date_open = strtotime($icase->date_opened);
                  $now = time();
                  $datediff = $now - $date_open;
                ?>
                    <tr>
                      <td><a href="{{ route('alerts.viewAlert', ['id' => $icase->id_alert])}}">{{ $icase->id_alert }}</a></td>
                      <td>{{ $icase->source }}</td>
                      <td>{{ $icase->status }}</td>
                      <td>

                        <?php
                        $link_id = DB::table('links')
                                    ->where('cat_link1','=','alerts')
                                    ->where('id_link1','=',$icase->id)
                                    ->where('desc_link','=','assignments')->first();
                        if (!$link_id) {
                          echo "Unassigned";
                        } else {
                          $lid = $link_id->id_link2;
                          $li_us = DB::table('users')
                                      ->where('id','=',$lid)->get();
                          $us_id = $li_us[0];
                          $us_na = $us_id->name;

                          echo $us_na;
                        }
                        ?>

                      </td>
                      <td>{{ $icase->date_opened }}</td>
                      <td><?php echo round($datediff / (60 * 60 * 24)); ?></td>
                      <td>{{ $icase->outcome }}</td>

                    </tr>
                @endforeach
              </tbody>
              <tfoot class="thead-light">
              <tr>
                <th id="footerTableID" name="footerTableID"></th>
                <th id="footerTableSource" name="footerTableSource"></th>
                <th id="footerTableStatus" name="footerTableStatus"></th>
                <th id="footerTableAT" name="footerTableAT"></th>
                <th id="footerTableDate" name="footerTableDate"></th>
                <th id="footerTableAge" name="footerTableAge"></th>
                <th id="footerTableOutcome" name="footerTableOutcome"></th>
              </tr>
            </tfoot>
        </table>
        </div>
      </div>

      <script src="https://cdn.datatables.net/2.0.7/js/dataTables.js"></script>
      <link rel="stylesheet" href="https://cdn.datatables.net/2.0.7/css/dataTables.dataTables.css" />
      <script>

      const table = new DataTable('#primeTable', {
        initComplete: function () {
        this.api()
            .columns()
            .every(function () {
                let column = this;
                let title = column.footer().textContent;

                // Create input element
                let input = document.createElement('input');
                input.placeholder = title;
                column.footer().replaceChildren(input);

                // Event listener for user input
                input.addEventListener('keyup', () => {
                    if (column.search() !== this.value) {
                        column.search(input.value).draw();
                    }
                });
            });

            this.api()
                .columns()
                .every(function () {
                    let column = this;
                    // Create select element
                    let select = document.createElement('select');
                    select.add(new Option(''));
                    column.header().appendChild(select);

                    // Apply listener for user change in value
                    select.addEventListener('change', function () {
                        column
                            .search(select.value, {exact: true})
                            .draw();
                    });

                    // Add list of options
                    column
                        .data()
                        .unique()
                        .sort()
                        .each(function (d, j) {
                            select.add(new Option(d));
                        });
                });

    }


    }

    );

table.on('click', 'tbody tr', function (e) {
    e.currentTarget.classList.toggle('selected');
});

document.querySelector('#editButton').addEventListener('click', function () {
    alert(table.rows('.selected').data().length + ' row(s) selected');
});



      </script>
      <script>
      document.getElementById("headerTableID").innerHTML = "ID";
      document.getElementById("headerTableOpen").innerHTML = "Date Opened";
      document.getElementById("headerTableAge").innerHTML = "Age (Days)";
      document.getElementById("footerTableID").innerHTML = "";
      document.getElementById("footerTableSource").innerHTML = "";
      document.getElementById("footerTableStatus").innerHTML = "";
      document.getElementById("footerTableAge").innerHTML = "";
      document.getElementById("footerTableOutcome").innerHTML = "";

      </script>
    </div>
  </div>
</div>
<hr />

@endsection
