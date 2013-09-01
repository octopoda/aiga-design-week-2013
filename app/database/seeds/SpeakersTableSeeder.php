<?php

class SpeakersTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('speakers')->truncate();

		$speakers = array(
			//Monday 
			array(
				'name'=>'Kryslyn Burks',
				'title'=>'Group Account Director / TracyLocke',
				'link'=>'http://aigadfwdw.org/post/59270050321/kryslyn-burks-group-account-director-tracylocke',
				'image'=>'/images/speakers/kryslyn-burks.png',
				'talk_id'=>'1'
			),

			array(
				'name'=>'Kim Elenez',
				'title'=>'Group Publisher / D Magazine Partners',
				'link'=>'http://aigadfwdw.org/post/58046256316/kim-elenez-group-publisher-d-magazine-partners',
				'image'=>'/images/speakers/kim-elenez.png',
				'talk_id'=>'1'
			),

			array(
				'name'=>'Noelle C. LeVeaux',
				'title'=>'Chief Marketing Officer / Dallas Convention & Visitors ',
				'link'=>'http://aigadfwdw.org/post/58046288578/noellecleveaux',
				'image'=>'/images/speakers/noelle-leveaux.png',
				'talk_id'=>'1'
			),

			array(
				'name'=>'Geoff German',
				'title'=>'Creative Director / Squires & Company',
				'link'=>'http://aigadfwdw.org/post/59270186537/geoff-german-creative-director-squires',
				'image'=>'/images/speakers/geoff-german.png',
				'talk_id'=>'2'
			),
			
			array(
				'name'=>'Patrick McDonnell',
				'title'=>'Urban Planner / GOOD Local Leader',
				'link'=>'http://aigadfwdw.org/post/59269680284/patrick-mcdonnell-urban-planner-good-local',
				'image'=>'/images/speakers/patrick-mcdonnell.png',
				'talk_id'=>'3'
			),

			array(
				'name'=>'Brandon Castillo',
				'title'=>'Founder Deep Ellum Outdoor Market & Deep Ellum P&G',
				'link'=>'http://aigadfwdw.org/post/59269530289/brandon-castillo-founder-deep-ellum-outdoor-market',
				'image'=>'/images/speakers/brandon-castillo.png',
				'talk_id'=>'4'
			),

			//Tuesday 
			array(
				'name'=>'Micheal Gibson',
				'title'=>'Associate Professor Communication Design Graduate Programs Coordinator of Design / Design Research University of North Texas',
				'link'=>'http://aigadfwdw.org/post/59271624174/michael-gibson-associate-professor-communication',
				'image'=>'/images/speakers/michael-gibson.png',
				'talk_id'=>'5'
			),	

			array(
				'name'=>'Suzanne Larkin',
				'title'=>'SMU',
				'link'=>'',
				'image'=>'',
				'talk_id'=>'6'
			),			

			array(
				'name'=>'Byron Sanders',
				'title'=>'Executive Director / Dallas Education Foundation',
				'link'=>'http://aigadfwdw.org/post/59272422886/byron-sanders-executive-director-dallas',
				'image'=>'/images/speakers/byron-sanders.png',
				'talk_id'=>'7'
			),	
			array(
				'name'=>'Willie Baronet',
				'title'=>'Visiting Executive-in-Residence / SMU’s Temerlin Advertising Institute',
				'link'=>'http://aigadfwdw.org/post/58046199662/willie-baronet-visiting-executive-in-residence',
				'image'=>'/images/speakers/willie-baronet.png',
				'talk_id'=>'8'
			),	

			//Wednesday
			array(
				'name'=>'Brent Brown',
				'title'=>'Founder / bcWorkshop + City of Dallas CityDesign Studio',
				'link'=>'http://aigadfwdw.org/post/58046143128/brent-a-brown-aia-founder-bcworkshop-city-of',
				'image'=>'/images/speakers/brent-brown.png',
				'talk_id'=>'9'
			),	
			array(
				'name'=>'Casey McGarr',
				'title'=>' Inky Lips Press',
				'link'=>'',
				'image'=>'',
				'talk_id'=>'10'
			),	
			array(
				'name'=>'Chad Houser',
				'title'=>'Cafe Momentum',
				'link'=>'',
				'image'=>'',
				'talk_id'=>'11'
			),			

			//Thursday
			array(
				'name'=>'Merrick Pickents',
				'title'=>'CreateGate',
				'link'=>'',
				'image'=>'',
				'talk_id'=>'12'
			),				

			array(
				'name'=>'Sung Kim',
				'title'=>'Senior Designer / Rockfish Interactive',
				'link'=>'http://aigadfwdw.org/post/58046057127/sung-kim-senior-designer-rockfish-interactive',
				'image'=>'/images/speakers/sung-kim.png',
				'talk_id'=>'13'
			),					


			//Friday 
			array(
				'name'=>'Mark Lea',
				'title'=>'Community Designer / bcWorkshop + GOOD Local Leader',
				'link'=>'http://aigadfwdw.org/post/58046013543/mark-lea-community-designer-bcworkshop-good',
				'image'=>'/images/speakers/mark-lea.png',
				'talk_id'=>'14'
			),			

			array(
				'name'=>'Keith Owens',
				'title'=>'Associate Professor, Communication Design / University of North Texas (UNT) College of Visual Arts and Design (CVAD),
Director / CVAD Design Research Center ',
				'link'=>'http://aigadfwdw.org/post/59395275036/keith-owens-associate-professor-communication',
				'image'=>'/images/speakers/keith-owens.png',
				'talk_id'=>'15'
			),

			array(
				'name'=>'Brandon Copley',
				'title'=>'Mobile Tech Entrepreneur',
				'link'=>'http://aigadfwdw.org/post/59273405470/brandon-copley-mobile-tech-entrepreneur-brandon',
				'image'=>'/images/speakers/brandon-copley.png',
				'talk_id'=>'16'
			),



	//Lunches
			//How Not Suck at Presentations
			array(
				'name'=>'Micheal Gibson',
				'title'=>'Associate Professor Communication Design Graduate Programs Coordinator of Design / Design Research University of North Texas',
				'link'=>'http://aigadfwdw.org/post/59271624174/michael-gibson-associate-professor-communication',
				'image'=>'/images/speakers/michael-gibson.png',
				'talk_id'=>'17'
			),	
			array(
				'name'=>'Meagan Mead',
				'title'=>'',
				'link'=>'',
				'image'=>'/images/speakers/',
				'talk_id'=>'17'
			),	

			//Shut up and Code
			array(
				'name'=>'Zack Davis',
				'title'=>'Principal / Creative Director',
				'link'=>'',
				'image'=>'/images/speakers/',
				'talk_id'=>'18'
			),	
			array(
				'name'=>'Jon Sandruck',
				'title'=>'',
				'link'=>'',
				'image'=>'/images/speakers/',
				'talk_id'=>'18'
			),



			//Fellow Award Winners
			array(
				'name'=>'Willie Baronet',
				'title'=>'Visiting Executive-in-Residence / SMU’s Temerlin Advertising Institute',
				'link'=>'',
				'image'=>'/images/speakers/',
				'talk_id'=>'19'
			),	
			array(
				'name'=>'Jimmy Squires',
				'title'=>'',
				'link'=>'',
				'image'=>'/images/speakers/',
				'talk_id'=>'19'
			),



		);

		// Uncomment the below to run the seeder
		DB::table('speakers')->insert($speakers);
	}

}
