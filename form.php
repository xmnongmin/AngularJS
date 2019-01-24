<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Angular Form</title>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>

<script>
	var myAppModule = angular.module('myAppModule', []);
	myAppModule.controller('MyController', function($scope){
		var ppl = {

			firstName: 'Jimmy',
			age: 21,
			address: {
				street:'16 Somewhere Drive',
				suburb:'Port Kenney',
				state:'Western Australia'
			}
		};

		$scope.person = ppl;

		$scope.showFirstName = function(){ 
			if(angular.isDefined($scope.firstName)){
				alert("Name is: "+$scope.firstName);
		    }
			else{
				alert("Please put in First Name");
			}

		}

	});


</script>

</head>

<body ng-app="myAppModule"  ng-controller="MyController">


		<form name="theForm">
			<input type="text" name="firstName" ng-model="firstName"><br>
			<input type="text" name="street" ng-model="person.address.street">
			<input type="button" ng-click="showFirstName()" value="Show First Name">
		</form>
		<p>
		First Name is: {{person.firstName}} <br>
		Address is: {{person.address.street}}
		</p>
	
		<p>
		First Name is: <span ng-bind="person.firstName"></span><br>
		Address is: <span ng-bind="person.address.street"></span>
		</p>
 
</body>

</html>
 