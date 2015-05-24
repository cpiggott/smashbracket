<?php

class TournamentController extends BaseController {

public function getCreateTournament(){
  if(!Auth::check()){
    return Redirect::to('')->with('error', 'You must be logged in to create a tournament');
  } else {
    return View::make('tournament.create');
  }

}



}
