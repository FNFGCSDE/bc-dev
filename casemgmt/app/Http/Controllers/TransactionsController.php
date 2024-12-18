<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Storage;

use Carbon\Carbon;

class TransactionsController extends Controller
{

  /*

      VIEWS

  */
  public function viewTxnsetList(Request $request)
  {
      return view('clients.txns.viewTxnsetList');
  }

  public function viewTxnset($txnset_id)
  {
      $txnset = DB::table('alerts')->where('id_alert','=',$alert_id)->get();

      return view('workitems.alerts.viewAlert', [ "txnset" => $txnset ]);
  }

  /*

      FILE UPLOAD

  */
  public function viewUploadTransactions(Request $request)
  {
      return view('clients.txns.viewUploadTransactions');
  }

  public function postUploadTxnsets(Request $request)
  {

    request()->validate([
      'txnset' => 'required|mimes:csv,txt,xls,xlsx',
    ]);

    // BEGIN FILE HANDLING

    $uploadName = request()->file('txnset')->getClientOriginalName();
    $path = request()->file('txnset')->getRealPath();
    $file = file($path);

    $datetime = date('y-m-d-H-i-s');
    $filename = base_path('storage/app/public/transactions/'.$datetime.'.csv');
    file_put_contents($filename, $file);

    $file_n = storage_path('app/public/transactions/'.$datetime.'.csv');
    $file_o = fopen($file_n, "r");

    $txnset_id = 1;
    $txnset_id = DB::table('txnsets')->max('id_txnset') + 1;

    DB::table('txnsets')->insert(
      [
        'id_txnset' => $txnset_id,
        'triaged'    => 0,
      ]
    );

    fgetcsv($file_o);

    $txn_id = 1;

    while (($data = fgetcsv($file_o, 200, ",")) !== FALSE ) {
      if ($data[0] == "Date") {}
      else {
        $date     = $data[0];
        $time     = $data[1];
        $type     = $data[2];
        $amount   = $data[3];
        $account  = $data[4];
        $method   = $data[5];
        $status   = $data[6];
        $desc     = $data[7];

        $txn_id = DB::table('txns')->max('id_txn') + 1;
        $amount_cents = floatval($amount) * 100;
        $amount_cents = intval($amount_cents);

        DB::table('txns')->insert(
          [
            'id_txnset' => $txnset_id,
            'id_txn' => $txn_id,
            'amt_raw' => $amount,
            'amt_cents' => $amount_cents,
            'currency' => "CAD",
            'date' => $date,
            'time' => $time,
            'txn_type' => $type,
            'category' => $method,
            'status' => $status,
            'description' => $desc,
            'id_account' => $account,
          ]
        );
      }
    }

    fclose($file_o);

    // END FILE HANDLING

    return redirect('transactions/viewUploadTransactions')->with('message', "Transactions uploaded successfully! Run step 2 next.");
  }

  public function postRunTriage(Request $request)
  {

      /*

      Runs various SQL based rules

      */

      $sql_text = "SELECT `id_txnset`, ANY_VALUE(id_txn), COUNT(*) as `total`
      FROM casemgmt.txns
      WHERE
        (amt_cents > 899999)
      AND
        (amt_cents < 1000000)
      AND
        (category = 'Cash')
      AND
        (txn_type = 'CREDIT')
      GROUP BY
        `id_txnset`
      ;";

      return view('clients.txns.viewUploadTransactions');
  }

  public function viewBatchTxnsets(Request $request)
  {
      return view('clients.txns.viewBatchTxnsets');
  }

  public function postBatchTxnsets(Request $request)
  {
      return view('clients.txns.viewBatchTxnsets');
  }


/*

    MANUAL CREATION

*/
  public function viewCreateTxnset(Request $request)
  {
      return view('clients.txns.viewTxnsetList');
  }

  public function postCreateTxnset(Request $request)
  {
      return view('clients.txns.viewTxnsetList');
  }

  public function viewCreateTxn(Request $request)
  {
      return view('clients.txns.viewTxnsetList');
  }

  public function postCreateTxn(Request $request)
  {
      return view('clients.txns.viewTxnsetList');
  }

  /*

      NOTES

  */
  public function addNewNoteTxnset(Request $request)
  {
      return view('clients.txns.viewTxnsetList');
  }

  /*

      EXPORT

  */
  public function exportTxns(Request $request)
  {
      return view('clients.txns.viewTxnsetList');
  }
}
