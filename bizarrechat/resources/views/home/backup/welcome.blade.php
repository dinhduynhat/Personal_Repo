<!DOCTYPE html>
<html lang="en" ng-app="myApp">

  <head>
    <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
          <title>Tuly Talk.</title>
          <!-- Bootstrap -->
          <link href="public/app/css/bootstrap.min.css" rel="stylesheet">
            <link href="public/app/css/custom.css" rel="stylesheet">
              <link href="public/app/css/toaster.css" rel="stylesheet">

                <style>
                  a {
                  color: orange;
                  }
                </style>
                <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
                <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
                <!--[if lt IE 9]><link href= "css/bootstrap-theme.css"rel= "stylesheet" >

<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
              </head>

  <body ng-cloak="">
    
    <div >
      <div class="container" style="margin-top:20px;">

        <div data-ng-view="" id="ng-view" class="slide-animation"></div>

      </div>
    </body>
  <toaster-container toaster-options="{'time-out': 3000}"></toaster-container>
  <!-- Libs -->
  {!! HTML::script('public/app/js/angular.min.js'); !!}
  {!! HTML::script('public/app/js/angular-route.min.js'); !!}
  {!! HTML::script('public/app/js/angular-animate.min.js'); !!}
  
  {!! HTML::script('public/app/js/toaster.js'); !!}
  {!! HTML::script('public/app/app/app.js'); !!}
  {!! HTML::script('public/app/app/data.js'); !!}
  {!! HTML::script('public/app/app/directives.js'); !!}
  {!! HTML::script('public/app/app/authCtrl.js'); !!}

  
</html>



<!-- 



<!DOCTYPE html>
<html ng-app="myApp" ng-app lang="en">
<head>
    <meta charset="utf-8">
    <title>Bizare Chat</title>
</head>
<body>
<div>
<div class="container">
<div ng-view="" id="ng-view"></div> 
</div>
</div>
{!! HTML::script('public/app/js/angular.min.js'); !!}
{!! HTML::script('public/app/js/angular-route.min.js'); !!}
{!! HTML::script('public/app/asset/app.js'); !!}
{!! HTML::script('public/js/jquery.min.js'); !!}
{!! HTML::script('public/app/asset/custom.js'); !!}
</body>
</html> -->