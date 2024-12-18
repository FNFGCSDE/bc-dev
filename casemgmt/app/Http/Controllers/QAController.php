<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QAController extends Controller
{

  public function viewQAList(Request $request)
  {
      return view('workitems.qa.viewQAList');
  }

  public function viewQA($qa_id)
  {
      $qa = DB::table('qa')->where('qa_alert','=',$qa_id)->get();

      return view('workitems.qa.viewQA', [ "qa" => $qa ]);
  }

  public function viewCreateQA(Request $request)
  {
      return view('workitems.qa.viewQAList');
  }

  public function viewQAList(Request $request)
  {
      return view('workitems.qa.viewQAList');
  }

  public function viewQAList(Request $request)
  {
      return view('workitems.qa.viewQAList');
  }

  public function viewQAList(Request $request)
  {
      return view('workitems.qa.viewQAList');
  }

  public function viewQAList(Request $request)
  {
      return view('workitems.qa.viewQAList');
  }

  public function viewQAList(Request $request)
  {
      return view('workitems.qa.viewQAList');
  }

}
