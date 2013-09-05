<?php

class TalkTableSeeder extends Seeder {

    public function run()
    {
        $talk = array(
        	//Mondy Night DESIGN:DFW
        	array( //1
        		'title'=>'Behind the BIG Campaign',
        		'activity_id' => 5,
        		'position'=> 1
        	),

			array( //2
        		'title'=>'Branding Klyde Warren',
        		'activity_id' => 5,
        		'position'=> 2
        	),        	

			array( //3
        		'title'=>'Designing Disruption',
        		'activity_id' => 5,
        		'position'=> 3
        	),

			array( //4
        		'title'=>'Neighborhood Markets',
        		'activity_id' => 5,
        		'position'=> 4
        	),


        	//Tuesday DESIGN:GROW
        	array( //5
        		'title'=>'Designing Problem Solving',
        		'activity_id' => 9,
        		'position'=> 1
        	),
        	array( //6
        		'title'=>'A Curriculum For Intervention',
        		'activity_id' => 9,
        		'position'=> 2
        	),
        	array( //7
        		'title'=>'DISD',
        		'activity_id' => 9,
        		'position'=> 3
        	),
        	array( //8
        		'title'=>'Growth After Agency',
        		'activity_id' => 9,
        		'position'=> 4
        	),


        	//Wednesday DESIGN:IMPACT
        	array( //9
        		'title'=>'',
        		'activity_id' => 13,
        		'position'=> 1
        	),
        	array( //10
        		'title'=>'',
        		'activity_id' => 13,
        		'position'=> 2
        	),
        	array( //11
        		'title'=>'',
        		'activity_id' => 13,
        		'position'=> 3
        	),


			//Thursday DESIGN:INTERACT
        	array( //12
        		'title'=>'',
        		'activity_id' => 17,
        		'position'=> 1
        	),
        	array( //13
        		'title'=>'',
        		'activity_id' => 17,
        		'position'=> 2
        	),
 			
			//Friday DESIGN:FORWARD
        	array( //14
        		'title'=>'',
        		'activity_id' => 20,
        		'position'=> 1
        	),
        	array( //15
        		'title'=>'',
        		'activity_id' => 20,
        		'position'=> 2
        	),
        	array( //16
        		'title'=>'',
        		'activity_id' => 20,
        		'position'=> 3
        	),




        	
        	//Lunches
        	array( //17
        		'title'=>'How Not To Suck At Giving Presentations',
        		'activity_id' => 6,
        		'position'=> 1
        	),
        	
        	array( //18
        		'title'=>'Shut Up and Learn to Code',
        		'activity_id' => 15,
        		'position'=> 1
        	),


        	//Fellow Awards
        	array( //19
        		'title'=>'Fellow Award',
        		'activity_id' => 21,
        		'position'=> 1
        	),
            array( //20
                'title'=>'Fellow Award Celebration',
                'activity_id' => 21,
                'position'=> 1
            ),

            //Late Comers 

            //Wednesdaty Night 
            array( //21
                'title'=>'',
                'activity_id' => 13,
                'position'=> 4
            ),

            //Thursday Night
            array( //22
                'title'=>'',
                'activity_id' => 17,
                'position'=> 3
            )            

        );

        // Uncomment the below to run the seeder
        DB::table('talks')->truncate();
        DB::table('talks')->insert($talk);
    }

}