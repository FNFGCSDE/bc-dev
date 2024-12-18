<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
  public function viewAlertsList(Request $request)
  {
      return view('workitems.alerts.viewAlertsList');
  }

  public function viewAlert($alert_id)
  {
      $alert = DB::table('alerts')->where('id_alert','=',$alert_id)->get();

      return view('workitems.alerts.viewAlert', [ "alert" => $alert ]);
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

  public function postUpdateAlert(Request $request)
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
