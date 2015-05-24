<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent {



	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'tournaments';

	protected $fillable = array('id', 'name', 'start_time', 'entry_fee', 'n64', 'melee', 'brawl', 'project_m', 'smash_4_wiiU', 'smash_4_3ds', 'location', 'lat', 'lng');



}
