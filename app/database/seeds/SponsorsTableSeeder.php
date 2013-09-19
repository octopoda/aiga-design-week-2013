<?php

class SponsorsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('sponsors')->truncate();

		$sponsors = array(
			array( //1
				'name'=>'42 Real Estate / Deep Ellum 42',
				'link'=>'',
				'image'=> '/images/sponsors/deep-ellum.png',
				'description'=> '',
			),
			array( //2
				'name'=>'Adobe',
				'link'=>'http://adobe.com',
				'image'=> '/images/sponsors/adobe.png',
				'description'=> '',
			),
			array( //3
				'name'=>'KIND Healthy Snacks',
				'link'=>'http://www.kindsnacks.com/',
				'image'=> '/images/sponsors/kind.png',
				'description'=> '',
			),
			array( //4
				'name'=>'Octopoda Interactive',
				'link'=>'http://octopodainteractive.com',
				'image'=> '/images/sponsors/octopoda.png',
				'description'=> '',
			),
			array( //5
				'name'=>'Lincoln Press',
				'link'=>'http://',
				'image'=> '/images/sponsors/lincoln.png',
				'description'=> '',
			),
			array( //6
				'name'=>'Big Box Little Box',
				'link'=>'http://',
				'image'=> '/images/sponsors/big-box.png',
				'description'=> '',
			),
			array( //7
				'name'=>'Appleton',
				'link'=>'http://appleton.com',
				'image'=> '/images/sponsors/',
				'description'=> '',
			),
			array( //8
				'name'=>'OLMSTED-KIRK',
				'link'=>'http://okpaper.com/',
				'image'=> '/images/sponsors/ok-paper.jpg',
				'description'=> '',
			),
			array( //8
				'name'=>'Streamtime',
				'link'=>'http://streamtime.net/',
				'image'=> '/images/sponsors/streamtime.jpg',
				'description'=> '',
			)
		);



		// Uncomment the below to run the seeder
		DB::table('sponsors')->insert($sponsors);
	}

}
