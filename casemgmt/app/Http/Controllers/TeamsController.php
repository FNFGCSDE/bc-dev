<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;


class TeamsController extends Controller
{

    public function viewTeamList(Request $request)
    {
      return view('admin.teams.viewTeamList');
    }


    public function viewTeam($id_team)
    {
        $team = DB::table('teams')->where('id_team','=',$id_team)->get();

        return view('admin.teams.viewTeam', [ "team" => $team ]);
    }



    public function viewUser($id_user)
    {
        $user = DB::table('users')->where('id','=',$id_user)->get();

        return view('admin.teams.viewUser', [ "user" => $user ]);
    }

}
