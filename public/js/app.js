// AIGA DFW Design Week Application build AngularJS
// Zack Davis
// Octopoda Interactive;




/* Main Module For App*/
var dw = angular.module('dw_schedule', ['ngResource']);


dw.run(function ($rootScope, $location, NavigationService) {
    $rootScope.$on('NavigationBroadcast', function (e) {
         $rootScope.dateViewed = NavigationService.dateClicked; 
    });

    $rootScope.polling = true;
});


// route configurations
dw.config(['$routeProvider', function ($routeProvider, $locationProvider, $httpProvider) {
    $routeProvider.
        when('/', {
            templateUrl: '/views/partials/schedule.html',
            controller: 'main-schedule',
            resolve: {
                _S: function  (ScheduleService) {
                    return ScheduleService.get();
                }   
            }
        }).
        otherwise({
            redirectTo: '/'
        });
     //$locationProvider.html5Mode(true);
}]);





//Flash Service
dw.factory('FlashService', function ($rootScope) {
    return {
        show: function (message) {
            $rootScope.flash = message;
        },
        clear: function (message){
            $rootScope.flash = '';
        }

    }
});



//Application Controller
dw.controller('application', function ($scope, $rootScope) {
    $scope.navigation =  {
        url: '/views/partials/navigation.html'
    }
})







