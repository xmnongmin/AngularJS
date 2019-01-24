<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Listing 2-3</title>
<!--- Before AngularJs Version 1.2 or older: The controller could be a function not defined into a module. --->
<!--- Angular Version 1.3 or newer: The controller must be defined into a module. Like in the answer. --->

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.22/angular.min.js"></script>

<!--- <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script> --->
<script>
 
    function abc($scope) {
 
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
	  
	 }

  </script>
</head>

<body ng-app ng-controller="abc">

 <strong>First Name</strong>: {{data.firstName}}<br/>
 <strong>Surname:</strong> {{data.surname | lowercase}}<br>
 <strong>Surname:</strong> {{data.consumption}}<br>
 <strong>Surname:</strong> {{data.consumption|number:2}}
 
 <h2>Gigabytes used over the last 3 months</h2> <ul>
 <li ng-repeat="gigabytes in data.monthlyUsageHistory | limitTo:-5">
  {{ gigabytes | number:2}}    </li>
 </ul>
 

</body>
</html>