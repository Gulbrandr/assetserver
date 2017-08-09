<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" ng-app="myApp" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" ng-app="myApp" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" ng-app="myApp" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en" ng-app="myApp" class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AssetServer</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bower_components/html5-boilerplate/css/normalize.css">
    <link rel="stylesheet" href="bower_components/html5-boilerplate/css/main.css">
    
    <script src="bower_components/html5-boilerplate/js/vendor/modernizr-2.6.2.min.js"></script>
    <link href="//netdna.bootstrapcdn.com/bootswatch/3.1.1/superhero/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/app.css" />
</head>
<?php 
if(!isset($_SESSION['login'])){ //if login in session is not set
    header("Location: #/");
}
?>

<body>
    <div class="container">
     <div class="page-header text-right">
        <h3 class="">Asset Server</h3>
        <form action="/" method="get" accept-charset="utf-8">
            <label>username<input type="text" class="form-control" name="" value=""></label>
            <label>password<input type="password" class="form-control" name="" value=""></label>
            <button type="submit"></button>
        </form>
    </div>
    <ul class="menu">
        <li><a href="#/">Home</a>
        </li>
        <li><a href="#/view1">Import</a>
        </li>
    </ul>
    </div>
   

    <!--[if lt IE 7]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->
    <div class="container">
        <div class="row">
            <div class="col-md-2 affix-top panel panel-primary">
                <div class="panel-heading">Reports</div>
                  <div class="panel-body">
                    <ul class="nav nav-pills nav-stacked sidebar">
                    <li><a href="#/">Home</a></li>
                    <li><a href="#/stock">Stock</a></li>
                    <li><a href="#/building">Building</a></li>
                    <li><a href="#/type">Type</a></li>                     
                    </ul>
                </div>
                
                
            </div>
            <div class="col-md-10" ng-view></div>
        </div>

    </div>



    <!-- In production use:
  <script src="//ajax.googleapis.com/ajax/libs/angularjs/x.x.x/angular.min.js"></script>
  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="./js/vendor/jquery-csv.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

    <script src="bower_components/angular/angular.js"></script>
    <script src="bower_components/angular-route/angular-route.js"></script>
    <script src="js/app.js"></script>
    <script src="js/services.js"></script>
    <script src="js/controllers.js"></script>
    <script src="js/filters.js"></script>
    <script src="js/directives.js"></script>
</body>

</html>