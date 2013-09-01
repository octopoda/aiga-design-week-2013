<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		// $this->call('UserTableSeeder');
		$this->call('ActivitiesTableSeeder');
		$this->call('SpeakersTableSeeder');
		$this->call('VenuesTableSeeder');
		$this->call('SponsorsTableSeeder');
		$this->call('DaysTableSeeder');
		$this->call('StudiosTableSeeder');
		$this->call('TalkTableSeeder');
	}

}