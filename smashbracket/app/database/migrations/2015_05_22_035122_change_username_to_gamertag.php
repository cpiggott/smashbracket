<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class ChangeUsernameToGamertag extends Migration {


	public function up()
	{
		Schema::table('users', function($table)
		{
		    $table->string('gamertag');
		});
	}

	public function down()
	{
		//
	}

}
