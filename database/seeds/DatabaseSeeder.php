<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call('UserTableSeeder');

        Model::reguard();
    	$this->call('AgredidosTableSeeder');
		$this->call('AgresioncategoriasTableSeeder');
		$this->call('AgresionsTableSeeder');
		$this->call('AgresorsTableSeeder');
		$this->call('DepartamentosTableSeeder');
		$this->call('GenerosTableSeeder');
		$this->call('MesTableSeeder');
		$this->call('MunicipiosTableSeeder');
		$this->call('TipoagresionsTableSeeder');
		$this->call('TipoagresorsTableSeeder');
		$this->call('TiposistemasTableSeeder');
		$this->call('TiposujetoagredidosTableSeeder');
		$this->call('AlertasTableSeeder');
	}
}
