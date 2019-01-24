<!doctype html>
<html ng-app="myApp">
<head>
<meta charset="utf-8">
<title>Listing 2-3</title>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
<script>
var myApp = angular.module('myApp', []);
myApp.controller("myAppCtl", function($scope){
	$scope.isCorrect=false;
	});
</script>
</head>

<body>
<p ng-bind="2+2"></p>
<p>{{2+2}}</p>
<p ng-cloak>{{2+2}}</p>
<div ng-include="'test.php'"></div>
<p ng-show="isCorrect" ng-controller="myAppCtl">That answer is correct!</p>

<div ng-repeat="city in ['xiamen', 'shanghai', 'beijing']">
 	{{$index}}.{{city}}
    {{$first?"(This is the first row)":""}} {{$last?"(This is the last row)":""}}
</div>

</body>
</html>