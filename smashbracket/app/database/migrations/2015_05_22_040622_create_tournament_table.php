<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTournamentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tournaments', function($table)
      {
          $table->increments('id');
          $table->string('name', 64);
          $table->datetime('start_time');
          $table->double('entry_fee');
          $table->boolean('n64');
					$table->boolean('melee');
					$table->boolean('brawl');
					$table->boolean('project_m');
					$table->boolean('smash_4_wiiU');
					$table->boolean('smash_4_3ds');
					$table->string('location');
					$table->double('lat');
					$table->double('lng');
          $table->timestamps();
      });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tournaments');
	}

}
