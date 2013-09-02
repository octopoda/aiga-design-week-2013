
<!DOCTYPE html>

<html ng-app="dw_schedule">
    <head>  
        <!-- meta content -->
        <meta charset="utf-8">
        <title>AIGA DFW DESIGN:BIG WEEK</title>
        <meta name="description" content="">
        <meta name="author" content="humans.txt">
        <meta name="keywords" content="AIGA Design Week, AIGA DFW, AIGA, Design Week, Dallas Design Week"  />

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
        <meta name="apple-mobile-web-app-capable" content="yes"/>

        <link rel="shortcut icon" href="favicon.png?v=2" type="image/x-icon" />
        <link rel="apple-touch-icon-precomposed" href="/apple-touch-icon.png">

        <!-- Facebook Metadata /-->
        <meta property="fb:page_id" content="" />
        <meta property="og:image" content="/facebook.jpg" />
        <meta property="og:description" content="See the design behind us. Beneath us. Surrounding us. And ahead of us. See DFW DESIGN:BIG."/>
        <meta property="og:title" content="AIGA DFW DESIGN:BIG WEEK"/>

        <!-- Google+ Metadata /-->
        <meta itemprop="name" content="AIGA DFW DESIGN:BIG WEEK">
        <meta itemprop="description" content="See the design behind us. Beneath us. Surrounding us. And ahead of us. See DFW DESIGN:BIG.">
        <meta itemprop="image" content="/facebook.jpg">


        <!-- build:css ../build/css/app.min.css -->
        <link rel="stylesheet" href="/css/gumby.css">
        <!-- endbuild -->

        <script src="/bower_components/modernizr/modernizr.js"></script>
    </head>
    <body ng-controller="application">
        <!--[if lt IE 8]>
                <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a                        href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
            <![endif]-->

        <div class="outer-wrap">
            <section class="load-screen">
                <div class="center-image"></div>
            </section>
            <div class="inner-wrap" id="innerWrap">

            
            
            <header class="row hide-tablet hide-phone desktop-header">
                <h1 class="mobile-logo" ng-click="clearDays()">AIGA DFW : Design Week:  Design Big</h1>
                <div class="bottom-border"></div>
            </header>
            <section class="row">
                <div class="danger alert" id="flash" ng-show="flash">{{ flash }}</div>
            </section>
            
            <section class="row">
                <header ng-include src="navigation.url" class="nav-header"></header>
                <div class="angular" id"view" ng-view></div>  
            </section>
            
            </div> 
        </div> 
        
        
        
  
        <!-- end scripts-->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.1.5/angular.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.1.5/angular-resource.min.js"></script>
        
        <script src="/js/plugins.js"></script>
        <script src="/js/main.js"></script>
        <!-- build:js ../build/js/app.min.js -->
        
        <script src="/js/app.js"></script>
        <script src="/js/app.navigation.js"></script>
        <script src="/js/app.schedule.js"></script>
        
        <!-- endbuild -->

        <script>angular.module("dw_schedule").constant("CSRF_TOKEN",  '<?= csrf_token(); ?>')</script>


    </body>
</html>