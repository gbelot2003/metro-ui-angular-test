<?php

use Illuminate\Database\Seeder;

class GenerosTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('generos')->delete();
        
	}

}
