@extends('layouts.app')

@section('sidebar')


@endsection

@section('content')
    <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->

                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid p-3">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard for {{ auth()->user()->name }}</h1>

                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-3 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Open Cases</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                              131
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-3 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Open Alerts</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                              277
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-3 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Case Age Avg</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                              28.5
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-xl-3 col-md-3 mb-4">
                          <a href="{{ route('transactions.viewUploadTransactions')}}"  class="btn btn-primary">Load Transactions</a>
                        </div>
                        <div class="col-xl-3 col-md-3 mb-4">
                            <button class="btn btn-success">Case from Media</button>
                        </div>

                    </div>

                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-6 col-lg-6">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">
                                      <a href="{{ route('cases.viewCasesList')}}">
                                        Open Cases
                                      </a>
                                    </h6>

                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                  <div class="table-responsive small">
                                    <table class="table table-striped table-sm" id="primeCasesTable" name="primeCasesTable">

                                      <thead class="thead-light">
                                      <tr>
                                        <th id="headerCasesTableID" name="headerCasesTableID">ID</th>
                                        <th id="headerCasesTableStatus" name="headerCasesTableStatus">Status <br /></th>
                                        <th id="headerCasesTableAT" name="headerCasesTableAT">Assigned To</th>
                                        <th id="headerCasesTableAge" name="headerCasesTableAge">Age (Days)</th>
                                        <th id="headerCasesTableOutcome" name="headerCasesTableOutcome">Outcome</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <?php
                                          $icases = DB::table('icases')->get();

                                      ?>
                                          @foreach($icases as $icase)
                                          <?php
                                            $date_open = strtotime($icase->date_opened);
                                            $now = time();
                                            $datediff = $now - $date_open;


                                            //$lid_id = $lid[0];
                                            /*$li_id = $lid_id["id_link2"];
                                            $li_us = DB::table('users')
                                                        ->where('id','=',$li_id)->get();
                                            $us_id = $li_us[0];
                                            $us_na = $us_id->name;*/

                                          ?>
                                              <tr>
                                                <td><a href="{{ route('cases.viewCase', ['id' => $icase->id_case])}}">{{ $icase->id_case }}</a></td>
                                                <td>{{ $icase->status }}</td>
                                                <td>
                                                <?php
                                                $link_id = DB::table('links')
                                                            ->where('cat_link1','=','icases')
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
                                                ?></td>
                                                <td><?php echo round($datediff / (60 * 60 * 24)); ?></td>
                                                <td>{{ $icase->outcome }}</td>
                                              </tr>
                                          @endforeach
                                        </tbody>

                                        <tfoot class="thead-light">
                                        <tr>
                                          <th id="footerCasesTableID" name="footerCasesTableID"></th>
                                          <th id="footerCasesTableStatus" name="footerCasesTableStatus"></th>
                                          <th id="footerCasesTableAT" name="footerCasesTableAT"></th>
                                          <th id="footerCasesTableAge" name="footerCasesTableAge"></th>
                                          <th id="footerCasesTableOutcome" name="footerCasesTableOutcome"></th>
                                        </tr>
                                      </tfoot>
                                  </table>
                                  </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-6">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">
                                      <a href="#">
                                        Open Alerts
                                      </a>
                                    </h6>
                                </div>
                                <div class="card-body">
                                  <div class="table-responsive small">
                                  <table class="table table-striped table-sm" id="primeAlertsTable" name="primeAlertsTable">
                                    <thead class="thead-light">
                                    <tr>
                                      <th id="headerAlertsTableID" name="headerAlertsTableID">ID</th>
                                      <th id="headerAlertsTableStatus" name="headerAlertsTableStatus">Status  <br /></th>
                                      <th id="headerAlertsTableAT" name="headerAlertsTableAT">Assigned To</th>
                                      <th id="headerAlertsTableAge" name="headerAlertsTableAge">Age (Days)</th>
                                      <th id="headerAlertsTableOutcome" name="headerAlertsTableOutcome">Outcome <br /></th>
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
                                              <td><?php echo round($datediff / (60 * 60 * 24)); ?></td>
                                              <td>{{ $icase->outcome }}</td>

                                            </tr>
                                        @endforeach
                                      </tbody>
                                      <tfoot class="thead-light">
                                      <tr>
                                        <th id="footerAlertsTableID" name="footerAlertsTableID"></th>
                                        <th id="footerAlertsTableStatus" name="footerAlertsTableStatus"></th>
                                        <th id="footerAlertsTableAT" name="footerAlertsTableAT"></th>
                                        <th id="footerAlertsTableAge" name="footerAlertsTableAge"></th>
                                        <th id="footerAlertsTableOutcome" name="footerAlertsTableOutcome"></th>
                                      </tr>
                                    </tfoot>
                                </table>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">

                            <!-- Project Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">
                                      <a href="#">
                                        Team Members
                                      </a>
                                    </h6>
                                </div>
                                <div class="card-body">
                                  <div class="table-responsive small">

                                  <table class="table table-striped table-sm" id="primeUsersTable" name="primeUsersTable">
                                    <thead class="thead-light">
                                    <tr>
                                      <th id="headerUsersTableSource" name="headerUsersTableSource">Name</th>
                                      <th id="headerTableStatus" name="headerTableStatus">Role  <br /></th>
                                      <th id="headerTableAT" name="headerTableAT">Team  <br /></th>
                                      <th id="headerTableOpen" name="headerTableOpen">Reports To</th>
                                      <th id="headerTableAge" name="headerTableAge">Queue</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $alerts = DB::table('users')->get();

                                    ?>
                                        @foreach($alerts as $icase)

                                            <tr>
                                              <td><a href="#">{{ $icase->name }}</a></td>
                                              <td>Role</td>
                                              <td>Team</td>
                                              <td>Reports To</td>
                                              <td><button class="btn btn-primary">View</button></td>

                                            </tr>
                                        @endforeach
                                      </tbody>
                                      <tfoot class="thead-light">
                                      <tr>
                                        <th id="footerTableID" name="footerTableID"></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>

                                      </tr>
                                    </tfoot>
                                </table>
                                </div>

                            </div>



                        </div>
                      </div>

                        <div class="col-lg-6 mb-4">

                            <!-- Projects -->
                            <div class="card shadow mb-4">
                              <div
                                  class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                  <h6 class="m-0 font-weight-bold text-primary">
                                    <a href="#">
                                      Reports
                                    </a>
                                  </h6>

                              </div>
                              <!-- Card Body -->
                              <div class="card-body">
                                <script src="https://balkan.app/js/orgchart.js"></script>
                                <div id="tree"/>
                                <script>
                                var chart = new OrgChart(document.getElementById("tree"), {
                                    template: "ana",
                                    layout: OrgChart.tree,
                                    mouseScrool: OrgChart.action.ctrlZoom,
                                    enableDragDrop: true,
                                    nodeBinding: {
                                        field_0: "name",
                                        field_1: "title"
                                    },
                                    nodes: [
                                        { id: 1, name: "Pearl Patton", title: "Director" },
                                        { id: 2, pid: 1, name: "Merlin Albion", title: "Senior Manager" },
                                        { id: 3, pid: 1, name: "Shardene Postlewaith", title: "Senior Manager" },
                                        { id: 4, pid: 1, name: "Amy Lin", title: "Senior Manager" },
                                        { id: 5, pid: 2, name: "Susanna Helmsley", title: "Manager" },
                                        { id: 6, pid: 2, name: "Theodoric Jones", title: "Manager"  },
                                        { id: 7, pid: 2, name: "Lana Kane", title: "Manager"  },
                                        { id: 8, pid: 3, name: "Bruce Wayne", title: "Manager"  },
                                        { id: 9, pid: 3, name: "Lukas Chillblain", title: "Manager"  },
                                        { id: 10, pid: 3, name: "Omedwe Niko", title: "Manager"  },
                                        { id: 11, pid: 4, name: "Yara Excelsior", title: "Manager"  },
                                        { id: 12, pid: 4, name: "Mallory Archer", title: "Manager"  },
                                        { id: 13, pid: 5, name: "Belinda Watchtower", title: "Senior Investigator"  },
                                        { id: 14, pid: 5, name: "Manfred Dukesworth", title: "Senior Investigator" },
                                        { id: 15, pid: 5, name: "Tsingwa Wong", title: "Senior Investigator" },
                                        { id: 16, pid: 5, name: "Enrique Titan", title: "Investigator" },
                                        { id: 17, pid: 5, name: "Nerva Tian", title: "Investigator" },
                                        { id: 18, pid: 5, name: "Tsao Tsao", title: "Investigator" },
                                        { id: 19, pid: 5, name: "James Mcnulty", title: "Special Investigator" },
                                        { id: 20, pid: 6, name: "Boggfrey Walderthicknesse", title: "Senior Investigator" },
                                        { id: 21, pid: 6, name: "Coriolanus Garum", title: "Investigator" }
                                    ],
                                    toolbar: {
                                        fullScreen: true,
                                        zoom: true,
                                        fit: true,
                                        expandAll: true
                                    },
                                });
                                </script>

                              </div>

                            </div>

                        </div>
                    </div>

                </div>
                <!-- CDN -->
                <script src="https://cdn.datatables.net/2.0.7/js/dataTables.js"></script>
                <link rel="stylesheet" href="https://cdn.datatables.net/2.0.7/css/dataTables.dataTables.css" />
                <script>

                const primeCasesTable = new DataTable('#primeCasesTable', {
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

                const primeAlertsTable = new DataTable('#primeAlertsTable', {
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
                            });


                const primeUsersTable = new DataTable('#primeUsersTable', {
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
                                      if (d[0] == "<") {
                                        textd = d.slice(12, -4);
                                        select.add(new Option(textd));
                                      } else {
                                        select.add(new Option(d));
                                      }

                                  });
                                });
                              }
                            }
                          );

            </script>
            <script>
            document.getElementById("headerAlertsTableID").innerHTML = "ID";
            document.getElementById("headerAlertsTableAge").innerHTML = "Age (Days)";
            document.getElementById("headerCasesTableID").innerHTML = "ID";
            document.getElementById("headerCasesTableAge").innerHTML = "Age (Days)";
            document.getElementById("footerAlertsTableAge").innerHTML = "";
            document.getElementById("footerAlertsTableStatus").innerHTML = "";
            document.getElementById("footerAlertsTableOutcome").innerHTML = "";
            document.getElementById("footerCasesTableAge").innerHTML = "";
            document.getElementById("footerCasesTableStatus").innerHTML = "";
            document.getElementById("footerCasesTableOutcome").innerHTML = "";
            </script>
            </div>



<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Fortitude North 2024</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->
@endsection
