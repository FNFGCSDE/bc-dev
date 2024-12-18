<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Input;

use Carbon\Carbon;


class AlertController extends Controller
{
  public function viewAlertsList(Request $request)
  {
      return view('workitems.alerts.viewAlertsList');
  }

  public function viewAlert($alert_id)
  {
      $alert = DB::table('alerts')->where('id_alert','=',$alert_id)->get();

      return view('workitems.alerts.viewAlert', [ "alert" => $alert] );
  }

  public function viewUpdateAlert($alert_id)
  {
      $alert = DB::table('alerts')->where('id_alert','=',$alert_id)->get();

      return view('workitems.alerts.viewUpdateAlert', [ "alert" => $alert ]);
  }

  public function postUpdateAlert(Request $request)
  {

    $input    = $request->all();
    $altid    = $request->input('id_alert');
    $state    = $request->input('updateAlert');
    $datetime = Carbon::now()->toDateTimeString();

    $alert = DB::table('alerts')->where('id_alert','=',$altid)->get();


    if ($state == "a" or $state == "b" or $state == "c") {
      pass;
    } elseif ($state == 0) {
      # Close

      DB::table('alerts')->where('id_alert','=',$altid)->update(
        [
          'status'          => "Closed",
          'date_submitted'  => $datetime,
          'outcome'         => 'Close'
        ]
      );

      $logno = DB::table('logitems')->max('id') + 1;
      DB::table('logitems')->insert(
        [
          'id_logitem' => $logno,
          'id_log' => "1",
          'actor' => "Pearl Patton",
          'group' => "FIU",
          'where' => "localhost",
          'when' => "Now",
          'target' => "Alert",
          'action' => "Close",
          'action_type' => "update",
          'event_name' => "Standard Alert Closure",
          'description' => "Alert closure, no review",
        ]
      );
    } elseif ($state == 1) {
      /*# Close Mgr Rev
      DB::table('alerts')->insert(
        [
          'status' => "Under Review",
          'date_submitted' => $datetime,

        ]
      );

      DB::table('logitems')->insert(
        [
          'id' => 0,

        ]
      );

      DB::table('links')->insert(
        [
          'id' => 0,

        ]
      );

      DB::table('logitems')->insert(
        [
          'id' => 0,

        ]
      );

      DB::table('linkassignments')->insert(
        [
          'id' => 0,

        ]
      );

      DB::table('logitems')->insert(
        [
          'id' => 0,

        ]
      );

    } elseif ($state == 2) {
      # Escalate
      DB::table('alerts')->insert(
        [
          'status'          => "Closed",
          'date_submitted'  => $datetime,
          'outcome'         => 'Escalate'
        ]
      );

      DB::table('logitems')->insert(
        [
          'id' => 0,

        ]
      );

      DB::table('icases')->insert(
        [
          'id' => 0,

        ]
      );

      DB::table('logitems')->insert(
        [
          'id' => 0,

        ]
      );
    } elseif ($state == 3) {
      # Escalate Mgr Rev
      DB::table('alerts')->insert(
        [
          'status' => "Under Review",
          'date_submitted' => $datetime,

        ]
      );

      DB::table('logitems')->insert(
        [
          'id_logitem' => "5",

        ]
      );

      DB::table('icases')->insert(
        [
          'id' => 0,

        ]
      );

      DB::table('logitems')->insert(
        [
          'id' => 0,

        ]
      );

      DB::table('links')->insert(
        [
          'id' => 0,

        ]
      );

      DB::table('logitems')->insert(
        [
          'id' => 0,

        ]
      );

      DB::table('linkassignments')->insert(
        [
          'id' => 0,

        ]
      );

      DB::table('logitems')->insert(
        [
          'id' => 0,

        ]
      );
    } elseif ($state == 4) {
      pass;
      /*# Roll-up Alert
      DB::table('linkrelatedworkitems')->insert(
        [
          'id' => 0,

        ]
      );*/
    } elseif ($state == 5) {
      pass;
      /* Roll-up Case
      DB::table('linkrelatedworkitems')->insert(
        [
          'id' => 0,

        ]
      );*/
    }


    return redirect()->route('alerts.viewAlert', ['id' => $altid])->with('message', "Alert Closed Successfully!");
}


  public function viewAddNewNoteAlert(Request $request)
  {
      return view('workitems.alerts.viewCreateAlerts');
  }


  public function postAddNewNoteAlert(Request $request)
  {
      return view('workitems.alerts.viewCreateAlerts');
  }

  public function viewCreateAlerts(Request $request)
  {
      return view('workitems.alerts.viewCreateAlerts');
  }

  public function postCreateAlerts(Request $request)
  {
      return view('workitems.alerts.viewCreateAlerts');
  }

  public function postAssignAlert(Request $request)
  {
      return view('workitems.alerts.viewAlertsList');
  }

  public function postCloseAlert(Request $request)
  {
      return view('workitems.alerts.viewAlertsList');
  }

  public function addNewNoteAlert(Request $request)
  {
      return view('workitems.alerts.viewAlertsList');
  }

  public function addNewDocumentAlert(Request $request)
  {
      return view('workitems.alerts.viewAlertsList');
  }

  public function editDocumentAlert(Request $request)
  {
      return view('workitems.alerts.viewAlertsList');
  }

  public function deleteDocumentAlert(Request $request)
  {
      return view('workitems.alerts.viewAlertsList');
  }

  public function exportAlerts(Request $request)
  {
      return view('workitems.alerts.viewAlertsList');
  }

}
