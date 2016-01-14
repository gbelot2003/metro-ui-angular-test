<?php

use Illuminate\Database\Seeder;

class AgredidosTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('agredidos')->delete();
        
	}

}
