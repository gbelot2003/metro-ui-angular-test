<?php

use Illuminate\Database\Seeder;

class AgresorsTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('agresors')->delete();
        
	}

}
