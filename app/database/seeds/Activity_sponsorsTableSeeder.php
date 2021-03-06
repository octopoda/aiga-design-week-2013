<?php

class Activity_sponsorsTableSeeder extends Seeder {

    public function run()
    {
        $activity_sponsors = array(
        	//Saturday
        	array(
        		'activity_id'=>'22',
        		'sponsor_id'=>'1',
        	),
        	array(
        		'activity_id'=>'22',
        		'sponsor_id'=>'2',
        	),
        	array(
        		'activity_id'=>'22',
        		'sponsor_id'=>'3',
        	),
        	array(
        		'activity_id'=>'22',
        		'sponsor_id'=>'4',
        	),
        	array(
        		'activity_id'=>'22',
        		'sponsor_id'=>'5',
        	),
        	array(
        		'activity_id'=>'22',
        		'sponsor_id'=>'6',
        	),
        	array(
        		'activity_id'=>'22',
        		'sponsor_id'=>'7',
        	),
            array(
                'activity_id'=>'22',
                'sponsor_id'=>'9',
            ),

        	//Monday
        	array(
        		'activity_id'=>'23',
        		'sponsor_id'=>'1',
        	),
        	array(
        		'activity_id'=>'23',
        		'sponsor_id'=>'2',
        	),
        	array(
        		'activity_id'=>'23',
        		'sponsor_id'=>'3',
        	),
        	array(
        		'activity_id'=>'23',
        		'sponsor_id'=>'4',
        	),
        	array(
        		'activity_id'=>'23',
        		'sponsor_id'=>'5',
        	),
        	array(
        		'activity_id'=>'23',
        		'sponsor_id'=>'6',
        	),
            array(
                'activity_id'=>'23',
                'sponsor_id'=>'9',
            ),
            


        	//Tuesday
        	array(
        		'activity_id'=>'24',
        		'sponsor_id'=>'1',
        	),
        	array(
        		'activity_id'=>'24',
        		'sponsor_id'=>'2',
        	),
        	array(
        		'activity_id'=>'24',
        		'sponsor_id'=>'3',
        	),
        	array(
        		'activity_id'=>'24',
        		'sponsor_id'=>'4',
        	),
        	array(
        		'activity_id'=>'24',
        		'sponsor_id'=>'5',
        	),
        	array(
        		'activity_id'=>'24',
        		'sponsor_id'=>'6',
        	),
            array(
                'activity_id'=>'24',
                'sponsor_id'=>'8',
            ),
            array(
                'activity_id'=>'24',
                'sponsor_id'=>'9',
            ),

        	//Wednesday
        	array(
        		'activity_id'=>'25',
        		'sponsor_id'=>'1',
        	),
        	array(
        		'activity_id'=>'25',
        		'sponsor_id'=>'2',
        	),
        	array(
        		'activity_id'=>'25',
        		'sponsor_id'=>'3',
        	),
        	array(
        		'activity_id'=>'25',
        		'sponsor_id'=>'4',
        	),
        	array(
        		'activity_id'=>'25',
        		'sponsor_id'=>'5',
        	),
        	array(
        		'activity_id'=>'25',
        		'sponsor_id'=>'6',
        	),
            array(
                'activity_id'=>'25',
                'sponsor_id'=>'9',
            ),

        	//Thursday
        	array(
        		'activity_id'=>'26',
        		'sponsor_id'=>'1',
        	),
        	array(
        		'activity_id'=>'26',
        		'sponsor_id'=>'2',
        	),
        	array(
        		'activity_id'=>'26',
        		'sponsor_id'=>'3',
        	),
        	array(
        		'activity_id'=>'26',
        		'sponsor_id'=>'4',
        	),
        	array(
        		'activity_id'=>'26',
        		'sponsor_id'=>'5',
        	),
        	array(
        		'activity_id'=>'26',
        		'sponsor_id'=>'6',
        	),
            array(
                'activity_id'=>'26',
                'sponsor_id'=>'9',
            ),

        	//Friday
        	array(
        		'activity_id'=>'27',
        		'sponsor_id'=>'1',
        	),
        	array(
        		'activity_id'=>'27',
        		'sponsor_id'=>'2',
        	),
        	array(
        		'activity_id'=>'27',
        		'sponsor_id'=>'3',
        	),
        	array(
        		'activity_id'=>'27',
        		'sponsor_id'=>'4',
        	),
        	array(
        		'activity_id'=>'27',
        		'sponsor_id'=>'5',
        	),
        	array(
        		'activity_id'=>'27',
        		'sponsor_id'=>'6',
        	),
            array(
                'activity_id'=>'27',
                'sponsor_id'=>'9',
            ),
        );

        // Uncomment the below to run the seeder
        DB::table('activity_sponsor')->truncate();
        DB::table('activity_sponsor')->insert($activity_sponsors);
    }

}