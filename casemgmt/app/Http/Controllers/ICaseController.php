<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

class ICaseController extends Controller
{

  public function viewCasesList(Request $request)
  {
    return view('workitems.icases.ViewCasesList');
  }


  public function viewCase($case_id)
  {
      $case = DB::table('icases')->where('id_case','=',$case_id)->get();

      return view('workitems.icases.viewCase', [ "case" => $case ]);
  }




}
