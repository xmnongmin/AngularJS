<!doctype html>
<html ng-app="myApp">
<head>
<meta charset="utf-8">
<title>Chapter 6: Windows</title>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
	
<script>
	
	var myApp = angular.module("myApp", []);
	
	myApp.controller("myController", function($scope, $window,$location,$document,dateTimeService){
		
		$scope.winWidth = $window.innerWidth;
		
		$scope.url = $location.absUrl();
		$scope.protocol = $location.protocol();
		$scope.host = $location.host();
		$scope.port = $location.port();
		$scope.docTitle = $document[0].title;
		
		$scope.theDate = dateTimeService.getDate();
		$scope.theTime = dateTimeService.getTime();
		
	});
	
	myApp.factory("dateTimeService",function(){
		var dateTimeSvc={};
		dateTimeSvc.getDate = function(){
			return new Date().toDateString();
    	}
		dateTimeSvc.getTime = function(){
			return new Date().toTimeString();
    	}
		return dateTimeSvc;		 
	});
	
</script>	
</head>

<body>

<p ng-controller="myController">
{{winWidth}}
<br>
{{url}}
<br>
{{protocol}}
<br>
{{host}}
<br>
{{port}}
<br>
{{docTitle}}
<br>

{{theDate}}
<br>
{{theTime}}
</p>
</body>
</html>