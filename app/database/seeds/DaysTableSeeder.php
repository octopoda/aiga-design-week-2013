<?php

class DaysTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		

		$days = array(
			array (
				'day_name' => 'SAT 9/21',
				'day_title'=> 'BIG:Kickoff',
				'date'=>'2013-09-21 00:00:00'
			),
			array (
				'day_name' => 'MON 9/23',
				'day_title'=> 'DESIGN:DFW',
				'date'=>'2013-09-23 00:00:00'
			),
			array (
				'day_name' => 'TUE 9/24',
				'day_title'=> 'DESIGN:GROW',
				'date'=>'2013-09-24 00:00:00'
			),
			array (
				'day_name' => 'WED 9/25',
				'day_title'=> 'DESIGN:IMPACT',
				'date'=>'2013-09-25 00:00:00'
			),
			array (
				'day_name' => 'THU 9/26',
				'day_title'=> 'DESIGN:INTERACT',
				'date'=>'2013-09-26 00:00:00'
			),
			array (
				'day_name' => 'FRI 9/27',
				'day_title'=> 'DESIGN:FORWARD',
				'date'=>'2013-09-27 00:00:00'
			),
			array (
				'day_name' => 'SAT 10/5',
				'day_title'=> 'DESIGN:HEART',
				'date'=>'2013-10-05 00:00:00'
			)
		);

		// Uncomment the below to run the seeder
		DB::table('days')->truncate();
		DB::table('days')->insert($days);
	}

}
