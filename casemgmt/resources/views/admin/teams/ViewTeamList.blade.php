@extends('layouts.app')

@section('content')
<h1>View Teams</h1>
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
<div class="card">
  <div class="card-body">
    <div class="card-title">
        <strong><p class="h3">All Team Members</p></strong>
      <hr />

      <div class="container-fluid">
        <div class="table-responsive small">
          <table class="table table-striped table-sm" id="primeTable" name="primeTable">
            <thead class="thead-light">
            <tr>
              <th>Name <br /></th>
              <th>Email <br /></th>
              <th>Role <br /></th>
              <th>Reports To <br /></th>
            </tr>
            </thead>
            <tbody>
            <?php
                $users = DB::table('users')->get();

            ?>
                @foreach($users as $icase)

                    <tr>
                      <td><a href="">{{ $icase->name }}</a></td>
                      <td>{{ $icase->email }}</td>
                      <td>TBD</td>
                      <td>TBD</td>

                    </tr>
                @endforeach
              </tbody>
              <tfoot>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
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
