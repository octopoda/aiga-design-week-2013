<?php

class VenuesTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('venues')->truncate();

		$venues = array(
			//1
			array(
				'name'=>'2625 Main',
				'link'=> 'https://www.google.com/maps/preview#!q=2625+Main+St%2C+Dallas%2C+TX&data=!4m11!1m10!2i18!4m8!1m3!1d4770!2d-96.8709037!3d32.7750398!3m2!1i2246!2i1092!4f13.1',
				'image'=>'/images/venues/main-street.png',
				'address_1' =>'2625 Main St',
				'city'=>'Dallas'
			),

			//2
			array(
				'name'=>'Common Desk Deep Ellum',
				'link'=>'https://www.google.com/maps/preview#!q=2919+Commerce+St%2C+Dallas%2C+Texas+75226&data=!4m11!1m10!4m8!1m3!1d6991602!2d-100.0768425!3d31.1689339!3m2!1i1024!2i768!4f13.1!17b1',
				'image'=>'/images/venues/common-desk.png',
				'address_1' =>'2919 Commerce St',
				'city'=>'Deep Ellum'
			),

			//3
			array(
				'name'=>'The Wyly Theater',
				'link'=>'https://www.google.com/maps/preview#!data=!4m13!3m12!1m0!1m1!1s2400+Flora+St%2C+Dallas%2C+TX+75201!3m8!1m3!1d6991602!2d-100.0768425!3d31.1689339!3m2!1i1024!2i768!4f13.1',
				'image'=>'/images/venues/wyly-theater.png',
				'address_1' =>'2400 Flora St',
				'city'=>'Dallas'
			)

			
			
			
		);

		// Uncomment the below to run the seeder
		DB::table('venues')->insert($venues);
	}

}
