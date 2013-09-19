//'use strict';


dw.factory('ScheduleService', function ($resource) {
	return {
		get: function () {
			return $resource('/api/days/');
		}
	}
});

dw.factory('EventService', function ($http, $rootScope, PollingService, FlashService) {
    var EventService = function (data) {
        angular.extend(this, data);
    }

    EventService.prototype.get = function (_id) {
        PollingService.setTrue();
        return $http.get('/api/activity/'+_id).then(function (response) {
            PollingService.setFalse();
            return new EventService(response.data);
        }, function (response) {
            //Place in Flash
            FlashService.show('Bloody Hell!  You aren\'t supposed to see this.  You should be seeing Events Right now!');
        });
    }

    return EventService;
});


dw.factory('SharedService', function ($rootScope) { 
    var SharedService = {};
    SharedService.id = '';

    SharedService.prepForBroadcast = function (id) {
        this.id = id;
        this.broadcastItem();
    }

    SharedService.broadcastItem = function () {
        $rootScope.$broadcast('idBroadcast');
    }

    return SharedService
});

dw.factory('PollingService', function ($rootScope) {
    var PollingService = {};
    PollingService.polling = false;

    PollingService.setTrue = function () {
        this.polling = true;
        this.broadcastItem();
    }

    PollingService.setFalse = function () {
        this.polling = false;
        this.broadcastItem();
    }

    PollingService.broadcastItem = function () {
        $rootScope.$broadcast('pollingBroadcast');
    }

    return PollingService;
});


dw.factory('TalkService', function ($rootScope, $http, PollingService, FlashService) {
    var TalkService = function (data) {
        angular.extend(this, data);
    }

    TalkService.prototype.get = function (_id) {
        PollingService.setTrue();
        return $http.get('/api/talks/'+_id).then(function (response) {
            PollingService.setFalse();
            return new TalkService(response.data);
        }, function(response) {
            FlashService.show('Damn it!  The talk data was here just a second ago.  Where did it go?');
        });
    }

    return TalkService;
});

dw.factory('SponsorService', function ($rootScope, $http, PollingService, FlashService) {
    var SponsorService = function (data) {
        angular.extend(this, data);
    }

    SponsorService.prototype.get = function (_id) {
        PollingService.setTrue();
        return $http.get('/api/sponsors/'+_id).then(function (response) {
            PollingService.setFalse();
            return new SponsorService(response.data);
        }, function(response) {
            FlashService.show('Oh Shit! I can\'t find the sponsor data.  I am going to get fired for this.');
        });
    }

    return SponsorService;
});




dw.controller('main-schedule',  function ($scope, $rootScope, _S, EventService, SharedService, iconService, PollingService, TalkService, SponsorService) {
    
    //Get the Schedule
    PollingService.setTrue();
    var start = _S.query(function (response) { PollingService.setFalse() });
    $scope.schedule = start;
    
    //Set up Broacasters
    $scope.$on('idBroadcast', function () {
        $scope.day_id = SharedService.id;
    });

    $scope.$on('pollingBroadcast', function () {
        $scope.polling = PollingService.polling;
    });

    //Set up $http Services
    var event_start = new EventService();
    var talk_start = new TalkService();
    var sponsor_start =  new SponsorService();

    
    //User Clicks Event  - function changes event page
	$scope.changeEvent = function (_id) {
       $('.angular').children('div').addClass('active');
        $scope.evt = event_start.get(_id);
        iconService.setBackButton();
    }
	
    //Closes Event page 
    $scope.back = function () {
        $('.angular').children('div').removeClass('active');
    }

    //Makes military time into 12 hour time.
    $scope.twelveTime = function (_time) {
        if (!_time) {return;}

        var _split = _time.split(':');
        var _hour = _split[0];
        var _day = ' A.M.';
        if (_hour >= 12) {
            if (_hour > 12) {
                _hour = _hour-12;
            }
            _day = ' P.M.'
        } 
        return _hour+":"+_split[1]+_day;
    }

    //Grabs the speakers for each talk
    $scope.getTalks = function (_id) {
        $scope.talks = talk_start.get(_id);
    }

    $scope.getSponsors = function (_id)  {
        $scope.sponsors = sponsor_start.get(_id);
    }



});