<?php

class StudiosTableSeeder extends Seeder {

    public function run()
    {
        $studios = array(

        	// array(
	        // 	'activity_id'=>''
	        // 	'name'=>'',
	        // 	'address1'=>'',
	        // 	'address2'=>'',
	        // 	'city'=>'',
	        // 	'state'=>'',
	        // 	'zip'=>'',
	        // 	'image'=>'',
	        //  'map_link'=>'',
	        // 	'description'=>'',
	        // ),

        	//Monday
        	array(
	        	'activity_id'=>'4',
	        	'name'=>'Balcom Agency',
	        	'address1'=>'1500 Ballinger St',
	        	'address2'=>'',
	        	'city'=>'Ft. Worth',
	        	'state'=>'TX',
	        	'zip'=>'76102',
	        	'map_link'=>'https://www.google.com/maps/preview#!data=!1m4!1m3!1d4772!2d-97.341088!3d32.7436989!4m25!2m11!1m10!1s0x0%3A0x8c14b78584155620!3m8!1m3!1d6991602!2d-100.0768425!3d31.1689339!3m2!1i1024!2i768!4f13.1!5m12!1m11!1sBalcom+Agency+%2B+dallas!4m8!1m3!1d6991602!2d-100.0768425!3d31.1689339!3m2!1i1024!2i768!4f13.1!17b1',
	        	'image'=>'/images/studio/balcom.png',
	        	'description'=>'',
	        ),

	        array(
	        	'activity_id'=>'4',
	        	'name'=>'Caliber Creative',
	        	'address1'=>'501 2nd Ave',
	        	'address2'=>'B-108',
	        	'city'=>'Dallas',
	        	'state'=>'TX',
	        	'zip'=>'75226',
	        	'map_link'=>'https://www.google.com/maps/preview#!data=!4m25!2m11!1m10!1s0x0%3A0x61dc373cd3ca3699!3m8!1m3!1d6991602!2d-100.0768425!3d31.1689339!3m2!1i1024!2i768!4f13.1!5m12!1m11!1scaliber+creative+dallas+tx!4m8!1m3!1d6991602!2d-100.0768425!3d31.1689339!3m2!1i1024!2i768!4f13.1!17b1',
	        	'image'=>'/images/studio/caliber.png',
	        	'description'=>'',
	        ),

	        //Tuesday 
	         array(
	        	'activity_id'=>'8',
	        	'name'=>'70kft',
	        	'address1'=>'208 N Market St',
	        	'address2'=>'#409',
	        	'city'=>'Dallas',
	        	'state'=>'TX',
	        	'zip'=>'75202',
	        	'map_link'=>'https://www.google.com/maps/preview#!data=!4m25!2m11!1m10!1s0x0%3A0xab865f21a21de4a!3m8!1m3!1d6991602!2d-100.0768425!3d31.1689339!3m2!1i1024!2i768!4f13.1!5m12!1m11!1s70kft!4m8!1m3!1d6991602!2d-100.0768425!3d31.1689339!3m2!1i1024!2i768!4f13.1!17b1',
	        	'image'=>'/images/studio/70kft.png',
	        	'description'=>'',
	        ),

	         array(
	        	'activity_id'=>'8',
	        	'name'=>'Studio Name',
	        	'address1'=>'208 N Market St',
	        	'address2'=>'#409',
	        	'city'=>'Dallas',
	        	'state'=>'TX',
	        	'zip'=>'75202',
	        	'map_link'=>'https://www.google.com/maps/preview#!data=!4m25!2m11!1m10!1s0x0%3A0xab865f21a21de4a!3m8!1m3!1d6991602!2d-100.0768425!3d31.1689339!3m2!1i1024!2i768!4f13.1!5m12!1m11!1s70kft!4m8!1m3!1d6991602!2d-100.0768425!3d31.1689339!3m2!1i1024!2i768!4f13.1!17b1',
	        	'image'=>'',
	        	'description'=>'',
	        ),

		);

        // Uncomment the below to run the seeder
         DB::table('studios')->truncate();
         DB::table('studios')->insert($studios);
    }

}