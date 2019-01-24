<!doctype html>
<html ng-app >
<head>
<meta charset="utf-8">
<title>Listing 2-3</title>
<!--- Before AngularJs Version 1.2 or older: The controller could be a function not defined into a module. --->
<!--- Angular Version 1.3 or newer: The controller must be defined into a module. Like in the answer. --->

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.22/angular.min.js"></script>

<!--- <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script> --->
<script>
 
    function abc($scope) {
 
      var employees = ['Catherine Grant', 'Monica Grant', 'Christopher Grant', 'Jennifer Grant'];
 
      $scope.ourEmployees = employees;
	  
	 }

  </script>
</head>

<body ng-controller="abc">

<h2>Number of Employees: {{ourEmployees.length}}</h2>
 <p ng-repeat="employee in ourEmployees">{{employee}}</p>

</body>
</html>