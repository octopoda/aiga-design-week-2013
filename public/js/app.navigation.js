//Navigation Service
dw.factory('NavigationService', function ($rootScope, $resource) {
    var nav_open = false;
    var nav_class = 'nav-open';
    var d = document;
    var inner = d.getElementById('innerWrap');
    var search = d.getElementById('search');


    var search_open = false;
    var doc = document.documentElement;

    
    var transform_prop = window.Modernizr.prefixed('transform'),
        transition_prop = window.Modernizr.prefixed('transition'),
        transition_end = (function() {
            var props = {
                'WebkitTransition' : 'webkitTransitionEnd',
                'MozTransition'    : 'transitionend',
                'OTransition'      : 'oTransitionEnd otransitionend',
                'msTransition'     : 'MSTransitionEnd',
                'transition'       : 'transitionend'
            };
            return props.hasOwnProperty(transition_prop) ? props[transition_prop] : false;
    })();


    var closeNavEnd = function (e) {
        if (e && e.target == inner) { document.removeEventListener(transition_end, closeNavEnd, false); }
        nav_open = false;

    }

    var closeNav = function () {
        if (nav_open) {
            var duration = (transition_end && transition_prop) ? parseFloat(window.getComputedStyle(inner, '')[transition_prop + 'Duration']) : 0;
            if (duration > 0) {
                document.addEventListener(transition_end, closeNavEnd, false);
            } else {
                closeNavEnd(null);
            }
        }
        $('body').removeClass(nav_class);
    }

    var openNav = function () {
        if (nav_open)  {return;}
        console.log('opening nav');

        $('body').addClass(nav_class);
        nav_open = true;
        
        checkSideClick();
        linkClick();
    }

    var openSearch = function () {
        if (search_open) {return; }
        
        $('#search').addClass('active');
        search_open = true;
    }

    var closeSearch = function () {
        if (search_open) {
            var duration = (transition_end && transition_prop) ? parseFloat(window.getComputedStyle(d.getElementById('search'), '')[transition_prop + 'Duration']) : 0;
            
            if (duration > 0) {
                document.addEventListener(transition_end, closeSearchEnd, false);
            } else {
                closeSearchEnd(null);
            }
        } 
    }

    var closeSearchEnd = function (e) {
        if (e && e.target == search) { 
            $('#search').removeClass('active'); 
            document.removeEventListener(s_transition_end, closeSearchEnd, false);
        } else {
            $('#search').removeClass('active'); 
        }
        search_open = false;
    }

    var checkSideClick = function () {
        if (!nav_open) {return;}
        
        $(document).on(Gumby.click,   function (e) {
            var parent = $(e.target).parent();
            
            if (parent[0].offsetParent.localName != 'nav') {
                closeNav();
            } else {
                return;
            }
        });
    }

    var linkClick = function () {
        if (!nav_open) {return}
        
        $('.main-navigation ul li').on(Gumby.click,  function () {
            closeNav();
            return;
        });    
    }

    return {
        visible: true,
        icon: 'icon-menu',
        back: false,
        toggleNav: function (e) {
            if (nav_open && $('body').hasClass(nav_class)) {
                closeNav();
            } else {
                console.log('Toggle Open');
                openNav();
            }
        }, 
        toggleSearch: function (e) {
            if (search_open) {
                closeSearch();
            } else {
                openSearch();
            }
        },
        setVisible: function (bool) {
            this.visible = bool;
            this.broadcastNav();
        },
        setIcon: function (name) {
            this.icon = name;
            this.broadcastNav();
        }, 
        setBack: function (bool) {
            this.back = bool; 
            this.broadcastNav();
        },
        broadcastNav: function () {
            $rootScope.$broadcast('NavigationBroadcast');
        },
        get: function () {
            return $resource('api/getnav/');
        }


    }

});

dw.factory('iconService', function($rootScope) {
    var iconService = {};
    iconService.iconText = 'View By Day';
    iconService.act = 'show';

    iconService.setBackButton = function () {
        this.iconText = 'Schedule';
        this.act = 'back';
        this.broadcastItem();
    }

    iconService.setMenuButton = function () {
        this.iconText = 'View By Day';
        this.act = 'show';
        this.broadcastItem();
    }

    iconService.broadcastItem = function () {
        $rootScope.$broadcast('iconBroadcast');
    }

    return iconService;

});



//Navigation Controller
dw.controller('navigation', function ($scope, NavigationService, $rootScope, SharedService, iconService) {
    $scope.loading = true;
    
    var _navArray = NavigationService.get();
    $scope.items = _navArray.query(function (response) {
        $scope.loading = false;
    });
    $scope.iconText = iconService.iconText;
    

    $scope.showMenu = function (e) {
        e.preventDefault();

        if (iconService.act == 'back') {
            $('.angular').children('div').removeClass('active');
            iconService.setMenuButton();
        } else {
            NavigationService.toggleNav();    
        }
    }

    $scope.showSearch = function (e) {
        e.preventDefault();
        NavigationService.toggleSearch();
    }
    
    //Shared Service
    $scope.changeEvent = function (id) {
        SharedService.prepForBroadcast(id);
    }

    $scope.$on('iconBroadcast', function () {
        $scope.iconText = iconService.iconText;
    });


});