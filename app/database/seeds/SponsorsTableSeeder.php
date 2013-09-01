<?php

class SponsorsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('sponsors')->truncate();

		$sponsors = array(
			array(
				'name'=>'Dropbox',
				'link'=>'http://getdropbox.com',
				'image'=> '/public/images/dropbox.png',
				'description'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris cursus neque metus, ut lacinia eros fringilla at. Morbi eget pellentesque velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent at lacus congue eros luctus placerat quis ut diam. Nulla facilisi. Vestibulum gravida, lectus nec imperdiet semper, velit lacus dignissim lacus, lacinia condimentum sem eros quis arcu. Proin placerat faucibus facilisis. Sed adipiscing condimentum arcu.',
			)
		);

		// Uncomment the below to run the seeder
		DB::table('sponsors')->insert($sponsors);
	}

}
