<!DOCTYPE html>
<html lang="en" ng-app="myApp">

  <head>
  
    <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
          <title>Tuly Talk...</title>
          <!-- Bootstrap -->

          <link rel="stylesheet" type="text/css" href="public/css/Tulytalk.css" />
          <link rel="shotcut icon" type="favicon.png" href="images/favicon.png" />
          <link rel="icon" type="favicon.png" href="images/favicon.png" />
          <script src="public/js/jquery.min.js"></script>
          
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false&libraries=places"></script>

<script src="public/js/jquery.dataTables.min.js"></script>

<link rel="stylesheet" type="text/css" href="public/css/jquery.dataTables.css" />

          <link rel="stylesheet" type="text/css" href="public/app/css/toaster.css" />
              </head>

  <body ng-cloak="">
<toaster-container toaster-options="{'time-out': 3000}"></toaster-container>


    
    <div >
      <div class="container" style="margin-top:20px;">

        <div data-ng-view="" id="ng-view" class="slide-animation"></div>

      </div>

    </body>
<!-- Quickblox Libs -->


{!! HTML::script('public/quickblox/quickblox.js'); !!}
{!! HTML::script('public/quickblox/config.js'); !!}
{!! HTML::script('public/quickblox/main.js'); !!}

	
  <!-- Libs -->
  {!! HTML::script('public/js/custom.js'); !!}
  
  {!! HTML::script('public/app/js/angular.min.js'); !!}
  {!! HTML::script('https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.4.3/angular-cookies.min.js'); !!}
  {!! HTML::script('public/app/js/angular-route.min.js'); !!}
  {!! HTML::script('public/app/js/angular-animate.min.js'); !!}
  {!! HTML::script('public/app/js/toaster.js'); !!}
  {!! HTML::script('public/app/app/app.js'); !!}
  {!! HTML::script('public/app/app/data.js'); !!}
  {!! HTML::script('public/app/app/directives.js'); !!}
  {!! HTML::script('public/app/app/authCtrl.js'); !!}
  {!! HTML::script('public/app/js/toaster.js'); !!}
</html>