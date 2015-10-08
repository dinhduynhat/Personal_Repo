var app = angular.module('myApp', ['ngRoute', 'ngAnimate', 'toaster']);


app.config(['$routeProvider',
    function ($routeProvider) {
        $routeProvider.
                when('/login', {
                    title: 'Login',
                    templateUrl: 'resources/views/layout/login.php',
                    controller: 'authCtrl'
                })
                .when('/logout', {
                    title: 'Logout',
                    templateUrl: 'resources/views/layout/login.php',
                    controller: 'logoutCtrl'
                })
                .when('/signin', {
                    title: 'Signup',
                    templateUrl: 'resources/views/layout/signin.php',
                    controller: 'authCtrl'
                })
                .when('/registersuccess', {
                    title: 'Dashboard',
                    templateUrl: 'resources/views/layout/register-success.php',
                    controller: 'authCtrl'
                })
                .when('/dashboard', {
                    title: 'Dashboards',
                    templateUrl: 'resources/views/layout/dashboard.php',
                    controller: 'authCtrl'
                })
                .when('/profile', {
                    title: 'Profile',
                    templateUrl: 'resources/views/layout/profile.php',
                    controller: 'authCtrl'
                })
                .when('/contact', {
                    title: 'Contact',
                    templateUrl: 'resources/views/layout/contact.php',
                    controller: 'authCtrl'
                })
                .when('/album', {
                    title: 'Contact',
                    templateUrl: 'resources/views/layout/album.php',
                    controller: 'authCtrl'
                })
                .when('/favorite', {
                    title: 'Favorite',
                    templateUrl: 'resources/views/layout/favorite.php',
                    controller: 'authCtrl'
                })
                
                .when('/travel', {
                    title: 'Travel',
                    templateUrl: 'resources/views/layout/travel.php',
                    controller: 'authCtrl'
                })
                .when('/subscription', {
                    title: 'Subscription',
                    templateUrl: 'resources/views/layout/subscription.php',
                    controller: 'authCtrl'
                })
                
                .when('/invite_friends', {
                    title: 'InviteFriends',
                    templateUrl: 'resources/views/layout/invite_friends.php',
                    controller: 'authCtrl'
                })
                
                .when('/liked_you', {
                    title: 'LikedYou',
                    templateUrl: 'resources/views/layout/liked_you.php',
                    controller: 'authCtrl'
                })
                
                .when('/favourites', {
                    title: 'Favourites',
                    templateUrl: 'resources/views/layout/favourites.php',
                    controller: 'authCtrl'
                })
                
                .when('/coins', {
                    title: 'Subscription',
                    templateUrl: 'resources/views/layout/coins.php',
                    controller: 'authCtrl'
                })
                
                .when('/forget', {
                    title: 'forget',
                    templateUrl: 'resources/views/layout/forget.php',
                    controller: 'authCtrl'
                })
                .when('/verify', {
                    title: 'verfiy',
                    templateUrl: 'resources/views/layout/verify.php',
                    controller: 'authCtrl'
                })
                .when('/verifyfb', {
                    title: 'verfiyfb',
                    templateUrl: 'resources/views/layout/verifyfb.php',
                    controller: 'authCtrl'
                })
                .when('/registration', {
                    title: 'verfiy',
                    templateUrl: 'resources/views/layout/registration.php',
                    controller: 'authCtrl'
                })
                .when('/showprofile/:UserID', {
                    title: 'showprofile',
                    templateUrl: 'resources/views/layout/showprofile.php',
                    controller: 'ShowUserCtrl'
                  })
                .when('/', {
                    title: 'Login',
                    templateUrl: 'resources/views/layout/login.php',
                    controller: 'authCtrl',
                    role: '0'
                })
                 .when('/invalidtoken', { 
                    title: 'Login', 
                    templateUrl: 'resources/views/layout/invalidtoken.php', 
                    controller: 'authCtrl', 
                    role: '0' 
                    })
                    }])


        .run(function ($rootScope, $location, Data, $http) {
            $rootScope.$on("$routeChangeStart", function (event, next, current) {
                $http.post('resources/views/layout/calls/checkSession.php', {}).then(function (results)
                {
                    console.log("first data");
                    console.log(results.data);
                    
                    
                    var nextUrl = next.$$route.originalPath;                   
                    if (nextUrl == '/signin' || nextUrl == '/login' || nextUrl == '/verify' || nextUrl == '/registration' || nextUrl == '/forget' || nextUrl == '/invalidtoken' || nextUrl == '/registersuccess')
                    {
                        console.log('outpages');
                    }
                    else if ( nextUrl=='/showprofile/:UserID' )
                    {
                        console.log('User Profile');
                        //$location.path(nextUrl);
                    }
                    else
                    {
                        if (results.data == 1)
                        {
                            console.log('loggedin');
                            console.log(nextUrl);
                            console.log('to be redirect');
                            console.log('333333');
                            $location.path(nextUrl);
                        }
                        else {
                            console.log('not logged in');
                            $location.path('login');
                        }
                    }
                });
            });
        });