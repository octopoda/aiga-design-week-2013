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
				'name'=>'Kickoff Party',
				'venue_id'=> 2,
				'start_time'=> '18:30',
				'end_time'=> '22:00',
				'day_id'=>1,
				'description'=>'<p>It’s a party in our new digs. Mix and mingle with new and old friends at Common Desk in Deep Ellum. Stay tuned for more details.</p>',
				'image'=>'/images/events/kickoff.png',
				'register_link'=>'http://aigadfwdwbigkickoff13-eorg.eventbrite.com/',
				'page_type' => 1
			),


			//Monday
			array( //2
				'name'=>'WYLY Theater Tour',
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
			array( //3
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

			
			array( //4
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
			array( //5
				'name'=>'How Not to Suck at Giving Presentations',
				'venue_id'=> 1,
				'start_time'=> '12:00',
				'end_time'=> '13:30',
				'day_id'=>3,
				'description'=>'<p>Professional designers and developers like us are paid to create smart, badass work for our clients. All too often, however, our hard and thoughtful work fails to gain client approval simply because we didn’t present it effectively. In short, in these hyper-competitive times, sometimes the better design work loses out to the better sell. The same meticulous thinking that informs our strategies and our executions needs to affect how we present our work, as well as our explanations regarding WHY our work has been designed as it has. If you’re a designer or developer who’s slightly introverted by nature and prone to stage fright, or if you simply want to brush up on your presentation skills, join us for this fun, informative presentation. You’ll learn more about how to give your work the spotlight it deserves as you present it to clients and potential clients, and come away with an array of storytelling strategies and acting techniques that will help you improve your presentation performance.</p>

<p>Michael and Megan gave this presentation at this year’s SXSW Interactive Conference in Austin TWICE. The second was an encore of the first, and being asked to encore at SXSW Interactive is very rare. Almost 1,000 people attended these presentations at SXSW 2013, but you can hear and participate in &ldquo;How Not 2 Suck…&rdquo; in Dallas at this year’s Design:Big Week.</p>',
				'image'=>'/images/events/how-not-to-suck.png',
				'register_link'=>'http://aigadfwdesignbig-grow-eorg.eventbrite.com/',
				'page_type'=>1

			),
			array( //6
				'name'=>'Adobe Cloud Workshop',
				'venue_id'=> 1,
				'start_time'=> '14:30',
				'end_time'=> '17:30',
				'day_id'=>3,
				'description'=>'Creative Cloud for Designers: Create and deliver compelling designs to more audiences in more places than ever before. With Adobe Creative Cloud, one simple membership gives you access to the complete set of Adobe design tools, as well as every other Adobe creative desktop application, and more. You get new features and upgrades as soon as they are available. Cloud storage and file syncing capabilities allow you to access your files from virtually anywhere. And Internet-based services let you build and publish websites, portfolios, mobile apps, iPad apps, and content for any medium or device. Your entire creative world gets its own central workspace to keep your ideas, files, fonts, settings, notifications, desktop applications, and team members in sync.</p>

					<p>At this workshop, you&rdquo;ll learn how to streamline your workflow with Creative Cloud, new tools and advances to bring your design to life in Photoshop, Illustrator, InDesign, Muse and DPSSE. Instructor: April Clark, owner of Nuance Consulting LLC.</p>',
				'image'=>'/images/events/cloud-workshops.png',
				'register_link'=>'http://aigadfwdesignbig-grow-eorg.eventbrite.com/',
				'page_type'=>1

			),
			array( //7
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
			
			
			array( //8 
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
			array( //9
				'name'=>'Adobe Muse Workshop',
				'venue_id'=> 1,
				'start_time'=> '9:00',
				'end_time'=> '11:35',
				'day_id'=>4,
				'description'=>'<p>Learn how to build a website without coding! Adobe&reg; Muse$trade; software, available as part of Adobe Creative Cloud or single app membership, enables graphic designers to create HTML websites for desktop and mobile devices, without writing code. Design unique sites the way you design print layouts. Use familiar features and shortcuts from products like InDesign, access hundreds of web fonts, and add interactivity with built&ndash;in tools. Then, take your site live by publishing with the Adobe Business Catalyst® service or with any hosting provider of your choice. In just one day, you’ll learn how to use this deep set of design and layout features to deliver professional, highly designed websites that meet the latest web standards. Instructor: April Clark, owner of Nuance Consulting LLC.</p>',
				'image'=>'/images/events/muse-workshops.png',
				'register_link'=>'http://aigadfwdesignbig-impact-eorg.eventbrite.com/',
				'page_type'=>1

			),
			array( //10
				'name'=>'Lunch Lab Volume 3: Design Dallas\' Future',
				'venue_id'=> 1,
				'start_time'=> '12:00',
				'end_time'=> '13:30',
				'day_id'=>4,
				'description'=>'<p>Lunch Lab is about gathering creative thinkers to solve urban issues one hour at a time. The people of Dallas have an opportunity to shape the city’s destiny by claiming its most important asset - streets. Join us in a charrette to begin the development of a clear vision for a Dallas with urban bikeways and trails that connect our downtown districts, off-street trail networks as well as existing or planned cycling infrastructure. You can do a lot with your lunch hour.</p>',
				'image'=>'/images/events/lunch-lab.png',
				'register_link'=>'http://aigadfwdesignbig-impact-eorg.eventbrite.com/',
				'page_type'=>1
			),
			array( //11
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
			array( //12
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
			array( //13
				'name'=>'Adobe Digital Publishing Services Workshop',
				'venue_id'=> 1,
				'start_time'=> '9:00',
				'end_time'=> '11:30',
				'day_id'=>5,
				'description'=>'<p>In this workshop, you will learn everything you need to know to design and prepare an iPad app for submission to the Apple App Store without writing code. Adobe Digital Publishing Suite, Single Edition, provides designers with an intuitive way to create engaging, interactive iPad apps without writing code. Design your iPad app layout in InDesign, then move to Digital Publishing Suite, Single Edition to package for the App Store. Plus, Creative Cloud members can now create an unlimited number of iPad apps for submission to the Apple App Store. Instructor: April Clark, owner of Nuance Consulting LLC.</p>',
				'image'=>'/images/events/dps-workshops.png',
				'register_link'=>'http://aigadfwdesignbig-interact-eorg.eventbrite.com/',
				'page_type'=> 1
			),
			array( //14
				'name'=>'Shut up and Learn to Code',
				'venue_id'=> 1,
				'start_time'=> '12:00',
				'end_time'=> '1:30',
				'day_id'=>5,
				'description'=>'<p>As designers we strive for pixel perfection in our interactive documents. We nudge this element two pixels and make sure the gradient and drop shadow is perfect on that element. But sadly those days are over.  With CSS3 and responsive website we cannot build pixel perfect static images and expect developers to convert our designs to the thousands of screen sizes and multiple browsers. </p> 
<p>As the communication between designer and developer is growing we are constantly putting up walls like “Designers shouldn’t have to code” or “I can’t develop that, it‘s impossible.” It‘s time to tear down those walls and start learning how to communicate with each other. This will not only make our designs better, but will make us better designers. Join us for a presentation of why designers should code and how to start. We’ll look at HTML, CSS, Javascript and even some back-end coding. We’ll help you, the creative professional, learn how to understand all the code on the screen.</p>
<p>If you don’t want to become obsolete, then your designer skill set must go beyond Photoshop, InDesign, and Illustrator. We need to learn to convert our designs into functional interactive elements. We need to quit whining shut up and learn to code.</p>
<p><strong>Presenter: </strong>Zack Davis is the principal of Octopoda Interactive and a hybrid designer.  Some days he works in Illustrator and Photoshop creating identity marks, website mockups,  and illustrations, whereas the next day he will be in his favorite IDE working with PHP, CSS, HTML, and Javascript. Zack specializes in working with local small businesses to get their companies off the ground and to increase their efficiency.</p>',
				'image'=>'/images/events/shut-up.png',
				'register_link'=>'http://aigadfwdesignbig-interact-eorg.eventbrite.com/',
				'page_type'=> 1
			),
			array( //15
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
			
			array( //16
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
			array( //17
				'name'=>'Design + Entreprenuership',
				'venue_id'=> 1,
				'start_time'=> '12:00',
				'end_time'=> '13:30',
				'day_id'=>6,
				'description'=>'<p>There’s an amazing overlap between the qualities of a great entrepreneur and a great designer: both are obsessively driven to create; both identify and solve problems; both have a unique ability to think abstractly while translating abstract ideas into specific and relatable forms; both are collaborative and community-oriented; and the efforts of both are fueled by innate passion.  </p>

					<p>AIGA DFW wants to encourage members to consider their entrepreneurial potential by exposing them to the business-building process. During this panel, we will demonstrate to the business community how design thinking serves as a catalyst to economic growth. For members, it is a glimpse into a larger world of possibility. Rather than being restricted to a service provider role, the creative mind-set becomes a full equity partner in the art & commerce relationship.</p>

					<p>We will be joined by the following panelists: </p>
					<ul>
					<li>Herbert Austin / District Director for the U. S. Small Business Administration (SBA), DFW  </li>
					<li>Kate Canales / Director of Design Innovation at SMU’s School of Engineering </li>
					<li>Nick Clark / Founder of Common Desk and ROAM </li>
					<li>Jim Hart / Director of Arts Entrepreneurship at SMU.</li>
					</ul>
					',
				'image'=>'/images/events/design-ent@2x.png',
				'register_link'=>'http://aigadfwdesignbig-forward-eorg.eventbrite.com/',
				'page_type'=>1
			),
			array( //18
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
			array( //19
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
			array( //20
				'name'=>'Fellow Award Celebration',
				'venue_id'=> 3,
				'start_time'=> '19:00',
				'end_time'=> '21:30',
				'day_id'=>7,
				'description'=>'<p>AIGA DFW officially closes this year’s Design:Big Week at the Charles and Dee Wyly Theater with our Fellow Award Celebration honoring our 2013 winners Willie Baronet and Jimmy Squires. </p>

<p>The AIGA Fellow Award is the highest honor an AIGA chapter may bestow upon one of its members. With it, we honor senior-level members who have made a significant contribution to raising the standards of excellence in practice and conduct within our design community. The areas of education, writing, leadership, and reputation, as well as the practice of design, have equal consideration in measuring significant contribution.  </p>',
				'image'=>'/images/events/fellows-award.png',
				'register_link'=>'http://aigadfwdesignbig-heart-eorg.eventbrite.com/',
				'page_type'=>5
			),


			//Sponsors
			//Saturday
			array( //21
				'name'=>'Sponsors',
				'venue_id'=> null,
				'start_time'=> null,
				'end_time'=> null,
				'day_id'=>1,
				'description'=>'A Special Thanks to our Sponsors',
				'image'=>'/images/events/sponsors@2x.png',
				'register_link'=>null,
				'page_type'=>4
			),
			//Monday
			array( //22
				'name'=>'Sponsors',
				'venue_id'=> null,
				'start_time'=> null,
				'end_time'=> null,
				'day_id'=>2,
				'description'=>'A Special Thanks to our Sponsors',
				'image'=>'/images/events/sponsors@2x.png',
				'register_link'=>null,
				'page_type'=>4
			),
			//Tuesday
			array( //23
				'name'=>'Sponsors',
				'venue_id'=> null,
				'start_time'=> null,
				'end_time'=> null,
				'day_id'=>3,
				'description'=>'A Special Thanks to our Sponsors',
				'image'=>'/images/events/sponsors@2x.png',
				'register_link'=>null,
				'page_type'=>4
			),
			//Wednesday
			array( //24
				'name'=>'Sponsors',
				'venue_id'=> null,
				'start_time'=> null,
				'end_time'=> null,
				'day_id'=>4,
				'description'=>'A Special Thanks to our Sponsors',
				'image'=>'/images/events/sponsors@2x.png',
				'register_link'=>null,
				'page_type'=>4
			),
			//Thursday
			array( //25
				'name'=>'Sponsors',
				'venue_id'=> null,
				'start_time'=> null,
				'end_time'=> null,
				'day_id'=>5,
				'description'=>'A Special Thanks to our Sponsors',
				'image'=>'/images/events/sponsors@2x.png',
				'register_link'=>null,
				'page_type'=>4
			),
			//Friday
			array( //26
				'name'=>'Sponsors',
				'venue_id'=> null,
				'start_time'=> null,
				'end_time'=> null,
				'day_id'=>6,
				'description'=>'A Special Thanks to our Sponsors',
				'image'=>'/images/events/sponsors@2x.png',
				'register_link'=>null,
				'page_type'=>4
			),
			
		);

		
		// Uncomment the below to run the seeder
		DB::table('activities')->truncate();
		DB::table('activities')->insert($activities);
	}

}
