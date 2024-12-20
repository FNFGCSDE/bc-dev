<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');


Route::get('/migration', function () {
  return view('migrations', ['message' => 'Database migrations are being simulated here.']);
});

Route::middleware('auth')->group( function () {

/*
    WORK ITEMS

*/


  Route::group(['prefix' => '/alerts', 'as' => 'alerts.'], function () {

    Route::get('/viewCreateAlerts', '\App\Http\Controllers\AlertController@viewCreateAlerts')->name('viewCreateAlerts');
    Route::any('/postCreateAlerts', '\App\Http\Controllers\AlertController@postCreateAlerts')->name('postCreateAlerts');

    Route::get('/viewAlertsList', '\App\Http\Controllers\AlertController@viewAlertsList')->name('viewAlertsList');
    Route::get('/viewAlert/{id}', '\App\Http\Controllers\AlertController@viewAlert')->name('viewAlert');

    Route::get('/viewUpdateAlert/{id}', '\App\Http\Controllers\AlertController@viewUpdateAlert')->name('viewUpdateAlert');
    Route::any('/postAssignAlert', '\App\Http\Controllers\AlertController@postAssignAlert')->name('postAssignAlert');
    Route::any('/postUpdateAlert', '\App\Http\Controllers\AlertController@postUpdateAlert')->name('postUpdateAlert');
    Route::any('/postCloseAlert', '\App\Http\Controllers\AlertController@postCloseAlert')->name('postCloseAlert');

    Route::get('/viewAddNewNoteAlert', '\App\Http\Controllers\AlertController@viewAddNewNoteAlert')->name('viewAddNewNoteAlert');
    Route::any('/postAddNewNoteAlert', '\App\Http\Controllers\AlertController@postAddNewNoteAlert')->name('postAddNewNoteAlert');


    Route::any('/addNewDocumentAlert', '\App\Http\Controllers\AlertController@addNewDocumentAlert')->name('addNewDocumentAlert');
    Route::any('/editDocumentAlert', '\App\Http\Controllers\AlertController@editDocumentAlert')->name('editDocumentAlert');
    Route::any('/deleteDocumentAlert', '\App\Http\Controllers\AlertController@addNewDocumentAlert')->name('addNewDocumentAlert');

    Route::get('/export/Alerts', '\App\Http\Controllers\AlertController@exportAlerts')->name('exportAlerts');

  });

  Route::group(['prefix' => '/cases', 'as' => 'cases.'], function () {

    Route::get('/viewCasesList', '\App\Http\Controllers\ICaseController@viewCasesList')->name('viewCasesList');
    Route::get('/viewCase/{id}', '\App\Http\Controllers\ICaseController@viewCase')->name('viewCase');

    Route::get('/viewCreateCases', '\App\Http\Controllers\ICaseController@viewCreateCases')->name('viewCreateCases');
    Route::any('/postCreateAlerts', '\App\Http\Controllers\ICaseController@postCreateAlerts')->name('postCreateAlerts');

    Route::any('/postAssignCase', '\App\Http\Controllers\ICaseController@postAssignCase')->name('postAssignCase');
    Route::any('/postUpdateCase', '\App\Http\Controllers\ICaseController@postUpdateCase')->name('postUpdateCase');
    Route::any('/postCloseCase', '\App\Http\Controllers\ICaseController@postCloseCase')->name('postCloseCase');

    Route::any('/addNewNoteCase', '\App\Http\Controllers\ICaseController@addNewNoteCase')->name('addNewNoteCase');

    Route::any('/addNewDocumentCase', '\App\Http\Controllers\ICaseController@addNewDocumentAlert')->name('addNewDocumentAlert');
    Route::any('/editDocumentCase', '\App\Http\Controllers\ICaseController@editDocumentAlert')->name('editDocumentAlert');
    Route::any('/deleteDocumentCase', '\App\Http\Controllers\ICaseController@addNewDocumentAlert')->name('addNewDocumentAlert');

    Route::get('/export/Cases', '\App\Http\Controllers\ICaseController@exportCases')->name('exportCases');
  /*
  */
  });

  Route::group(['prefix' => '/qa', 'as' => 'qa.'], function () {

    Route::get('/viewQAList', '\App\Http\Controllers\QAController@viewQAList')->name('viewQAList');
    Route::get('/viewQA/{id}', '\App\Http\Controllers\QAController@viewQA')->name('viewQA');

    Route::get('/viewCreateCases', '\App\Http\Controllers\QAController@viewCreateCases')->name('viewCreateCases');
    Route::any('/postCreateAlerts', '\App\Http\Controllers\QAController@postCreateAlerts')->name('postCreateAlerts');

    Route::any('/postAssignCase', '\App\Http\Controllers\QAController@postAssignCase')->name('postAssignCase');
    Route::any('/postUpdateCase', '\App\Http\Controllers\QAController@postUpdateCase')->name('postUpdateCase');
    Route::any('/postCloseCase', '\App\Http\Controllers\QAController@postCloseCase')->name('postCloseCase');

    Route::any('/addNewNoteCase', '\App\Http\Controllers\QAController@addNewNoteCase')->name('addNewNoteCase');

    Route::any('/addNewDocumentCase', '\App\Http\Controllers\QAController@addNewDocumentAlert')->name('addNewDocumentAlert');
    Route::any('/editDocumentCase', '\App\Http\Controllers\QAController@editDocumentAlert')->name('editDocumentAlert');
    Route::any('/deleteDocumentCase', '\App\Http\Controllers\QAController@addNewDocumentAlert')->name('addNewDocumentAlert');

    Route::get('/export/Cases', '\App\Http\Controllers\QAController@exportCases')->name('exportCases');
/*
*/
  });
  /*

      CLIENTS

  */

  Route::group(['prefix' => '/clients', 'as' => 'clients.'], function () {
    Route::get('/viewClientsList', '\App\Http\Controllers\ClientsController@viewClientsList')->name('viewClientsList');
    Route::get('/viewClient/{id}', '\App\Http\Controllers\ClientsController@viewClient')->name('viewClient');

    Route::get('/viewSearchClients', '\App\Http\Controllers\ClientsController@viewSearchClients')->name('viewSearchClients');
    Route::any('/searchClients/{searchmod}', '\App\Http\Controllers\ClientsController@searchClients')->name('searchClients');
    Route::get('/viewSearchResults', '\App\Http\Controllers\ClientsController@viewSearchResults')->name('viewSearchResults');

    Route::get('/viewClientProfileUpdate', '\App\Http\Controllers\ClientsController@viewClientProfileUpdate')->name('viewClientProfileUpdate');
    Route::any('/postClientProfileUpdate', '\App\Http\Controllers\ClientsController@postClientProfileUpdate')->name('postClientProfileUpdate');

  });


  Route::group(['prefix' => '/transactions', 'as' => 'transactions.'], function () {
    Route::get('/viewTxnsetList', '\App\Http\Controllers\TransactionsController@viewClientsList')->name('viewTxnsetList');
    Route::get('/viewTxnset/{id}', '\App\Http\Controllers\TransactionsController@viewClient')->name('viewTxnset');

    Route::get('/viewUploadTransactions', '\App\Http\Controllers\TransactionsController@viewUploadTransactions')->name('viewUploadTransactions');
    Route::any('/postUploadTxnsets', '\App\Http\Controllers\TransactionsController@postUploadTxnsets')->name('postUploadTxnsets');
    Route::any('/postRunTriage', '\App\Http\Controllers\TransactionsController@postRunTriage')->name('postRunTriage');

  });




  /*

      ADMIN

  */

  Route::group(['prefix' => '/documents', 'as' => 'documents.'], function () {
    Route::get('/viewTeamList', '\App\Http\Controllers\Documents@viewTeamList')->name('viewTeamList');
    Route::get('/viewTeam/{id}', '\App\Http\Controllers\Documents@viewTeam')->name('viewTeam');

    Route::get('/viewUser/{id}', '\App\Http\Controllers\Documents@viewUser')->name('viewUser');
    Route::get('/viewProfileUpdate', '\App\Http\Controllers\Documents@viewProfileUpdate')->name('viewProfileUpdate');
    Route::any('/postProfileUpdate', '\App\Http\Controllers\Documents@postProfileUpdate')->name('postProfileUpdate');

  });

  Route::group(['prefix' => '/logs', 'as' => 'logs.'], function () {
    Route::get('/viewLogsList', '\App\Http\Controllers\LogsController@viewLogsList')->name('viewLogsList');
    Route::get('/viewLog/{id}', '\App\Http\Controllers\LogsController@viewLog')->name('viewLog');

    Route::get('/viewUser/{id}', '\App\Http\Controllers\LogsController@viewUser')->name('viewUser');
    Route::get('/viewProfileUpdate', '\App\Http\Controllers\LogsController@viewProfileUpdate')->name('viewProfileUpdate');
    Route::any('/postProfileUpdate', '\App\Http\Controllers\LogsController@postProfileUpdate')->name('postProfileUpdate');

  });

  Route::group(['prefix' => '/search', 'as' => 'search.'], function () {
    Route::get('/viewSearch', '\App\Http\Controllers\SearchController@viewSearch')->name('viewSearch');
    Route::any('/mainSearch/{searchable}', '\App\Http\Controllers\SearchController@mainSearch')->name('mainSearch');
    Route::get('/viewSearchResults', '\App\Http\Controllers\SearchController@viewSearchResults')->name('viewSearchResults');

  });


  Route::group(['prefix' => '/roles', 'as' => 'roles.'], function () {
    Route::get('/viewTeamList', '\App\Http\Controllers\RolesController@viewTeamList')->name('viewTeamList');
    Route::get('/viewTeam/{id}', '\App\Http\Controllers\RolesController@viewTeam')->name('viewTeam');

    Route::get('/viewUser/{id}', '\App\Http\Controllers\RolesController@viewUser')->name('viewUser');
    Route::get('/viewProfileUpdate', '\App\Http\Controllers\RolesController@viewProfileUpdate')->name('viewProfileUpdate');
    Route::any('/postProfileUpdate', '\App\Http\Controllers\RolesController@postProfileUpdate')->name('postProfileUpdate');

  });

  Route::group(['prefix' => '/users', 'as' => 'users.'], function () {
    Route::get('/viewTeamList', '\App\Http\Controllers\UsersController@viewTeamList')->name('viewTeamList');
    Route::get('/viewTeam/{id}', '\App\Http\Controllers\UsersController@viewTeam')->name('viewTeam');

    Route::get('/viewUser/{id}', '\App\Http\Controllers\UsersController@viewUser')->name('viewUser');
    Route::get('/viewProfileUpdate', '\App\Http\Controllers\UsersController@viewProfileUpdate')->name('viewProfileUpdate');
    Route::any('/postProfileUpdate', '\App\Http\Controllers\UsersController@postProfileUpdate')->name('postProfileUpdate');

  });


  Route::group(['prefix' => '/teams', 'as' => 'teams.'], function () {
    Route::get('/viewTeamList', '\App\Http\Controllers\TeamsController@viewTeamList')->name('viewTeamList');
    Route::get('/viewTeam/{id}', '\App\Http\Controllers\TeamsController@viewTeam')->name('viewTeam');

    Route::get('/viewUser/{id}', '\App\Http\Controllers\TeamsController@viewUser')->name('viewUser');
    Route::get('/viewProfileUpdate', '\App\Http\Controllers\TeamsController@viewProfileUpdate')->name('viewProfileUpdate');
    Route::any('/postProfileUpdate', '\App\Http\Controllers\TeamsController@postProfileUpdate')->name('postProfileUpdate');

  });

});
