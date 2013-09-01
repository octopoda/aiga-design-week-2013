<?php

class ActivitiesTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating

		//Page Types 
		// 1 = Event 
		// 2 = Studio Tours 
		// 3 = DB:Talks
		// 4 = Sponsors
		// 5 = Fellows Awards

		$activities = array(
			//Saturday
			array( //1
				'name'=>'Hackathon',
				'venue_id'=> 2,
				'start_time'=> '9:00',
				'end_time'=> '18:00',
				'day_id'=>1,
				'description'=>'',
				'image'=>'/images/events/hackathon.png',
				'register_link'=>null,
				'page_type'=> 1
			),
			array( //2
				'name'=>'Kickoff Party',
				'venue_id'=> 2,
				'start_time'=> '19:00',
				'end_time'=> '21:30',
				'day_id'=>1,
				'description'=>'',
				'image'=>'/images/events/kickoff.png',
				'register_link'=>'http://aigadfwdwbigkickoff13-eorg.eventbrite.com/',
				'page_type' => 1
			),


			//Monday
			array( //3
				'name'=>'Wylie Theater Tour',
				'venue_id'=> 3,
				'start_time'=> '10:45',
				'end_time'=> '12:00',
				'day_id'=>2,
				'description'=>'<p>The Dee and Charles Wyly Theatre in the Dallas Arts District is the ultimate representation of a design solution. </p>

								<p>The Dallas Theater Center, known for its innovative work and experimentation, needed a building that responded to the constant challenges born from the leadership&rsquo;s artistic visions behind their productions. In concepting and designing the Wyly, the architects needed to engender the same freedoms created by the makeshift nature of its previous home, The Arts District Theater, which was reknowned as the &ldquo;most flexible theater in America&rdquo; without the previous costs of constantly reconfiguring the stage. </p>

								<p>On Monday, September 23, we start our day with a tour of the world&rsquo;s only vertical theater — which answered these challenges by revolutionizing conventional theater design. The strategy behind the Wyly was to build a &ldquo;theater machine&rdquo; — a theater that could be transformed into a wide array of configurations at the push of a button to allow directors and scenic directors to fulfill their artistic desires while the performance chamber&rsquo;s materials encourage alterations at limited cost.</p>

								<p>Designed by Joshua Prince-Ramos of REX and Rem Koolhaas of the Office for Metropolitan Architecture (OMA), the Dee and Charles Wyly Theatre, seats up to 600 for performances of classical and experimental theatre, contemporary dance, musical performances, lectures and more. </p>

								<p><a href="http://www.archdaily.com/37736/dee-and-charles-wyly-theatre-rex-oma/">Click here to read more about this amazing design achievement. </a></p>',
				'image'=>'/images/events/wylie_tour.png',
				'register_link'=>'http://aigadfwdesignbig-dfw-eorg.eventbrite.com/',
				'page-type'=> 1

			),
			array( //4
				'name'=>'Studio Tours',
				'start_time'=> '15:00',
				'end_time'=> '16:30',
				'day_id'=>2,
				'venue_id'=>null,
				'description'=>'<p>We invite members, students, community and business leaders to come see where — and how — the magic happens. Each afternoon of Design:Big Week, two studios will open their doors, show their space and give a brief talk about the importance of design and their design process.</p>

				<p> Tours start promptly at 3pm. Attendance is free. But you must register to attend. </p>',
				'image'=>'/images/events/studio-tours.png',
				'register_link'=>'http://aigadfwdesignbig-dfw-eorg.eventbrite.com/',
				'page_type'=> 2
			),

			
			array( //5
				'name'=>'DB:Talks / DESIGN:DFW',
				'venue_id'=> 1,
				'start_time'=> '19:15',
				'end_time'=> '20:00',
				'day_id'=>2,
				'description'=>'For the first night of our Design:Big talks, we celebrate the design, promotion and growth of DFW: it’s neighborhoods, personality and branding on a local and national level. The talks for DB:Talks DFW are as follows:',
				'image'=>'/images/events/db-talks.png',	
				'register_link'=>'http://aigadfwdesignbig-dfw-eorg.eventbrite.com/',
				'page_type' => 3
			),	
		
			

		//TUESDAY 	
			array( //6
				'name'=>'How Not to Suck at Giving Presentations',
				'venue_id'=> 1,
				'start_time'=> '12:00',
				'end_time'=> '13:30',
				'day_id'=>3,
				'description'=>'',
				'image'=>'/images/events/lunch-lab.png',
				'register_link'=>'http://aigadfwdesignbig-grow-eorg.eventbrite.com/',
				'page_type'=>1

			),
			array( //7
				'name'=>'Adobe Cloud Workshop',
				'venue_id'=> 1,
				'start_time'=> '14:30',
				'end_time'=> '17:30',
				'day_id'=>3,
				'description'=>'Creative Cloud Workshop',
				'image'=>'/images/events/adobe-workshops.png',
				'register_link'=>'http://aigadfwdesignbig-grow-eorg.eventbrite.com/',
				'page_type'=>1

			),
			array( //8
				'name'=>'Studio Tours',
				'venue_id'=> null,
				'start_time'=> '15:00',
				'end_time'=> '16:30',
				'day_id'=>3,
				'description'=>'<p>We invite members, students, community and business leaders to come see where — and how — the magic happens. Each afternoon of Design:Big Week, two studios will open their doors, show their space and give a brief talk about the importance of design and their design process.</p>

				<p> Tours start promptly at 3pm. Attendance is free. But you must register to attend. </p>',
				'image'=>'/images/events/studio-tours.png',
				'register_link'=>'http://aigadfwdesignbig-grow-eorg.eventbrite.com/',
				'page_type'=> 2
			),
			
			
			array( //9 
				'name'=>'DB:Talks / DESIGN:GROW',
				'venue_id'=> 1,
				'start_time'=> '19:15',
				'end_time'=> '20:00',
				'day_id'=>3,
				'description'=>'On night two of DB:Talks, we explore design education, approaches to professional development, improving our craft and growth —both in our careers and personal projects. We&rsquo;ll also hear about what&rsquo;s going on in the Dallas Independent School District and some of the pursuits aimed at growing and bettering DISD&rsquo;s initiatives. DB:Talks Grow include:',
				'image'=>'/images/events/db-talks.png',
				'register_link'=>'http://aigadfwdesignbig-grow-eorg.eventbrite.com/',
				'page_type'=>3
			),
			
		
		


			//Wednesday
			array( //10
				'name'=>'Adobe Muse Workshop',
				'venue_id'=> 1,
				'start_time'=> '9:00',
				'end_time'=> '11:45',
				'day_id'=>4,
				'description'=>'Workshop on Adobe Muse',
				'image'=>'/images/events/adobe-workshops.png',
				'register_link'=>'http://aigadfwdesignbig-impact-eorg.eventbrite.com/',
				'page_type'=>1

			),
			array( //11
				'name'=>'Lunch Lab',
				'venue_id'=> 1,
				'start_time'=> '12:00',
				'end_time'=> '13:30',
				'day_id'=>4,
				'description'=>'',
				'image'=>'/images/events/lunch-lab.png',
				'register_link'=>'http://aigadfwdesignbig-impact-eorg.eventbrite.com/',
				'page_type'=>1
			),
			array( //12
				'name'=>'Studio Tours',
				'venue_id'=> '2',
				'start_time'=> '15:30',
				'end_time'=> '16:00',
				'day_id'=>4,
				'description'=>'<p>We invite members, students, community and business leaders to come see where — and how — the magic happens. Each afternoon of Design:Big Week, two studios will open their doors, show their space and give a brief talk about the importance of design and their design process.</p>

				<p> Tours start promptly at 3pm. Attendance is free. But you must register to attend. </p>',
				'image'=>'/images/events/studio-tours.png',
				'register_link'=>'http://aigadfwdesignbig-impact-eorg.eventbrite.com/',
				'page_type'=> 2
			),
			array( //13
				'name'=>'DB:Talks DESIGN:IMPACT',
				'venue_id'=> 1,
				'start_time'=> '19:15',
				'end_time'=> '20:00',
				'day_id'=>4,
				'description'=>'Design that impacts change in our communities and our world.',
				'image'=>'/images/events/design-impact.png',
				'register_link'=>'http://aigadfwdesignbig-impact-eorg.eventbrite.com/',
				'page_type'=> 3
			),
			
			


			//Thursday
			array( //14
				'name'=>'Adobe Digital Publishing Services Workshop',
				'venue_id'=> 1,
				'start_time'=> '9:00',
				'end_time'=> '11:45',
				'day_id'=>5,
				'description'=>'Adobe Workshop on Digtial Publishing Suite',
				'image'=>'/images/events/adobe-workshops.png',
				'register_link'=>'http://aigadfwdesignbig-interact-eorg.eventbrite.com/',
				'page_type'=> 1
			),
			array( //15
				'name'=>'Shut up and Learn to Code',
				'venue_id'=> 1,
				'start_time'=> '12:00',
				'end_time'=> '1:30',
				'day_id'=>5,
				'description'=>'',
				'image'=>'/images/events/lunch-lab.png',
				'register_link'=>'http://aigadfwdesignbig-interact-eorg.eventbrite.com/',
				'page_type'=> 1
			),
			array( //16
				'name'=>'Studio Tours',
				'venue_id'=> null,
				'start_time'=> '15:30',
				'end_time'=> '16:00',
				'day_id'=>5,
				'description'=>'<p>We invite members, students, community and business leaders to come see where — and how — the magic happens. Each afternoon of Design:Big Week, two studios will open their doors, show their space and give a brief talk about the importance of design and their design process.</p>

				<p> Tours start promptly at 3pm. Attendance is free. But you must register to attend. </p>',
				'image'=>'/images/events/studio-tours.png',
				'register_link'=>'http://aigadfwdesignbig-interact-eorg.eventbrite.com/',
				'page_type'=> 2
			),
			
			array( //17
				'name'=>'DB:Talks DESIGN:INTERACT',
				'venue_id'=> 1,
				'start_time'=> '19:15',
				'end_time'=> '22:00',
				'day_id'=>5,
				'description'=>'Design and user interaction. Thoughts on changing the way we think about engaging audiences and communities.',
				'image'=>'/images/events/db-talks.png',
				'register_link'=>'http://aigadfwdesignbig-interact-eorg.eventbrite.com/',
				'page_type'=>3

			),
			

			//Friday
			array( //18
				'name'=>'Design + Entreprenuership',
				'venue_id'=> 1,
				'start_time'=> '12:00',
				'end_time'=> '13:30',
				'day_id'=>6,
				'description'=>'',
				'image'=>'/images/events/lunch-lab.png',
				'register_link'=>'http://aigadfwdesignbig-forward-eorg.eventbrite.com/',
				'page_type'=>1
			),
			array( //19
				'name'=>'Studio Tours',
				'venue_id'=> '2',
				'start_time'=> '15:00',
				'end_time'=> '16:30',
				'day_id'=>6,
				'description'=>'<p>We invite members, students, community and business leaders to come see where — and how — the magic happens. Each afternoon of Design:Big Week, two studios will open their doors, show their space and give a brief talk about the importance of design and their design process.</p>

				<p> Tours start promptly at 3pm. Attendance is free. But you must register to attend. </p>',
				'image'=>'/images/events/studio-tours.png',
				'register_link'=>'http://aigadfwdesignbig-forward-eorg.eventbrite.com/',
				'page_type'=>2
			),
			array( //20
				'name'=>'DB:Talks DESIGN:FORWARD',
				'venue_id'=> 1,
				'start_time'=> '19:15',
				'end_time'=> '22:00',
				'day_id'=>6,
				'description'=>'The future of design and progressing the initiatives of our community and our professions.',
				'image'=>'/images/events/db-talks.png',
				'register_link'=>'http://aigadfwdesignbig-forward-eorg.eventbrite.com/',
				'page_type'=>3
			),
			

			//Saturday
			array( //21
				'name'=>'Fellow Award Dinner',
				'venue_id'=> 3,
				'start_time'=> '19:00',
				'end_time'=> '21:30',
				'day_id'=>7,
				'description'=>'',
				'image'=>'/images/events/fellows-award.png',
				'register_link'=>'http://aigadfwdesignbig-heart-eorg.eventbrite.com/',
				'page_type'=>5
			),


			//Sponsors
			array( //22
				'name'=>'Sponsors',
				'venue_id'=> null,
				'start_time'=> null,
				'end_time'=> null,
				'day_id'=>1,
				'description'=>'A Special Thanks to our Sponsors',
				'image'=>null,
				'register_link'=>null,
				'page_type'=>4
			),
			array( //23
				'name'=>'Sponsors',
				'venue_id'=> null,
				'start_time'=> null,
				'end_time'=> null,
				'day_id'=>2,
				'description'=>'A Special Thanks to our Sponsors',
				'image'=>null,
				'register_link'=>null,
				'page_type'=>4
			),
			array( //24
				'name'=>'Sponsors',
				'venue_id'=> null,
				'start_time'=> null,
				'end_time'=> null,
				'day_id'=>3,
				'description'=>'A Special Thanks to our Sponsors',
				'image'=>null,
				'register_link'=>null,
				'page_type'=>4
			),
			array( //25
				'name'=>'Sponsors',
				'venue_id'=> null,
				'start_time'=> null,
				'end_time'=> null,
				'day_id'=>4,
				'description'=>'A Special Thanks to our Sponsors',
				'image'=>null,
				'register_link'=>null,
				'page_type'=>4
			),
			array( //26
				'name'=>'Sponsors',
				'venue_id'=> null,
				'start_time'=> null,
				'end_time'=> null,
				'day_id'=>5,
				'description'=>'A Special Thanks to our Sponsors',
				'image'=>null,
				'register_link'=>null,
				'page_type'=>4
			),
			array( //27
				'name'=>'Sponsors',
				'venue_id'=> null,
				'start_time'=> null,
				'end_time'=> null,
				'day_id'=>6,
				'description'=>'A Special Thanks to our Sponsors',
				'image'=>null,
				'register_link'=>null,
				'page_type'=>4
			)
		);

		
		// Uncomment the below to run the seeder
		DB::table('activities')->truncate();
		DB::table('activities')->insert($activities);
	}

}
