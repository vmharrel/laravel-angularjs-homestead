	<!-- app/views/index.php -->
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel and Angular Zipongo Code Test</title>

	<!-- CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css"> <!-- load bootstrap via cdn -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css"> <!-- load fontawesome -->
	<style>
		body 		{ padding-top:30px; }
		form 		{ padding-bottom:20px; }
		.comment 	{ padding-bottom:20px; }
		.nav.navbar-nav.navbar-right { margin-right: 50px; }
	</style>

	<!-- JS -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.8/angular.min.js"></script> <!-- load angular -->

	<!-- ANGULAR -->
	<!-- all angular resources will be loaded from the /public folder -->
		<script src="js/controllers/mainCtrl.js"></script> <!-- load our controller -->
		<script src="js/services/userService.js"></script> <!-- load our service -->
		<script src="js/app.js"></script> <!-- load our application -->

</head>
<!-- declare our angular app and controller -->
<body class="container" ng-app="zipongoApp" ng-controller="mainController">

<!-- HEADER AND NAVBAR -->
<header>
    <nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="/">Zipongo Code Test</a>
        </div>

        <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><i class="fa fa-home"></i> Rankings</a></li>
            <li><a href="#scores"><i class="fa fa-shield"></i> Upload</a></li>
            <li><a href="#game"><i class="fa fa-comment"></i> Add</a></li>
        </ul>
    </div>
    </nav>
</header>

<div class="col-md-8 col-md-offset-2">

	<!-- NEW User FORM =============================================== -->
	<form ng-submit="submitUser()"> <!-- ng-submit will disable the default form action and use our function -->

		<!-- User Name -->
		<div class="form-group">
			<input type="text" class="form-control input-sm" name="user_name" ng-model="userData.user_name" placeholder="Name">
		</div>

		<!-- Email TEXT -->
		<div class="form-group">
			<input type="text" class="form-control input-lg" name="email" ng-model="userData.email" placeholder="Email">
		</div>

		<!-- Password TEXT -->
		<div class="form-group">
			<input type="text" class="form-control input-lg" name="password" ng-model="userData.password" placeholder="Password">
		</div>

		<!-- Created UTC TEXT -->
		<div class="form-group">
			<input type="hidden" class="form-control input-lg" name="created_utc" ng-model="userData.created_utc" value="1414636902000">
		</div>
		
		<!-- SUBMIT BUTTON -->
		<div class="form-group text-right">	
			<button type="submit" class="btn btn-primary btn-lg">Submit</button>
		</div>
	</form>

	<!-- LOADING ICON -->
	<!-- show loading icon if the loading variable is set to true -->
	<p class="text-center" ng-show="loading"><span class="fa fa-meh-o fa-5x fa-spin"></span></p>

		<!-- THE COMMENTS -->
	<!-- hide these comments if the loading variable is true -->
	<div class="comment" ng-hide="loading" ng-repeat="user in users">
		<h3>User #{{ user.id }} <small>by {{ user.user_name }}</h3>
		<p>{{ user.email }}</p>

		<p><a href="#" ng-click="deleteUser(user.id)" class="text-muted">Delete</a></p>
	</div>

</div>
</body>
</html>