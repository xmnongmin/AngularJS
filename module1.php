<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Module</title>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>

<script>
// create a new module called 'myAppModule' and save 
// a reference to it in a variable called myAppModule 
var myAppModule = angular.module('myAppModule', []);
 
// use the myAppModule variable to 
// configure the module with a controller 
myAppModule.controller('MyFilterDemoCtrl', function ($scope) {
	var employees = {
		  firstName: 'JENNA',
		  surname: 'GRANT',
		  dateJoined: new Date(2010, 2, 23),
		  consumption: 123.659855,
		  plan: 'super-basic-plan',
		   // Last 12 months of data usage
		   monthlyUsageHistory:[
		   124.659855,
		   85.645222,
		   96.235644,
		   179.555555,
		   148.699855,
		   65.652545,
		   123.659855,
		   89.645222,
		   97.235644,
		   129.555555,
		   188.699855,
		   65.652545] 
		  };
 	  
	  employees.firstName = employees.firstName.toLowerCase();
      $scope.data = employees;    
} );
 
// use the myAppModule variable to 
// configure the module with a filter 
myAppModule.filter('stripDashes', function() {    
	return function(txt) {
	 return txt.split('-').join(' ');
	}; 
});

myAppModule.filter('toTitleCase',function (){
		 return function(str){
		 return str.replace(/\w\S*/g, function(txt){return txt.charAt(0).toUpperCase() + txt. substr(1).toLowerCase();}); }   }
 
);
</script>
</head>

<body  ng-app="myAppModule"  ng-controller="MyFilterDemoCtrl">

{{data.plan}}<br>
{{data.plan | stripDashes }}<br>
{{data.firstName + " " + data.surname | toTitleCase }}

</body>
</html>