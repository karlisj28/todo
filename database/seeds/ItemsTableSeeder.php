<?php

use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder {
	public function run(){
		DB::table('items')->delete();

		$items = array(
			array(
				'name' => 'First task',
				'done' => false
			),

			array(
				'name' => 'Second task',
				'done' => true
			),

			array(
				'name' => 'Third task',
				'done' => false
			)
		);
		DB::table('items')->insert($items);
	}
}