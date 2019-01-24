<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Angular Form</title>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>

<script>
	var myAppModule = angular.module('myAppModule', []);
	myAppModule.controller('MyController', function($scope){
		var person = {

			channels: [
			{ value: "television", label: "Television" },
			{ value: "radio", label: "Radio" },
			{ value: "social-media", label: "Social Media"},
			{ value: "other", label: "Other"}
			],
			newsletterOptIn: false
			
		};

		$scope.person = person;
						   
		$scope.register = function(){
			
			$scope.firstNameInvalid = false;
			$scope.lastNameInvalid = false;
			
			if(!$scope.registrationForm.firstName.$valid){
				$scope.firstNameInvalid = true;
			}
			
			if(!$scope.registrationForm.lastName.$valid){
				$scope.lastNameInvalid = true;
			}
			
			if($scope.registrationForm.$valid){
				<!-- pending implementation --->
				$scope.doShow = true;
			}
		}
		
		

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
	
<style type="text/css">
body {
font: normal 16px/1.4 Georgia;
}
input:not([type='checkbox']), select {
width: 250px;
}
select, input {
padding: 5px;
margin-top: 12px;
font-family: inherit;
}
input[type='submit'] {
width: 264px;
}
form span {
color: red;
}
input[name='email'].ng-dirty.ng-invalid {
color: red;
}	
input[name='email'].ng-dirty.ng-valid {
color: green;
}
</style>

</head>

<body ng-app="myAppModule" ng-controller="MyController">


	<form name="registrationForm"  novalidate>
		<input type="text" placeholder="First Name" name="firstName" ng-model="person.firstName" required>
		<br><span ng-show="firstNameInvalid">Please enter a value for First Name</span>
		<br/>
		<input type="text" placeholder="Last Name" name="lastName" ng-model="person.lastName" required>
		<br><span ng-show="lastNameInvalid">Please enter a value for Last Name</span>
		<br/>
		<input type="email" placeholder="Email" name="email" ng-model="person.email" required>
		<br/>
		<select name="level" ng-model="person.levels"  ng-options="obj.value as obj.label for obj in person.channels">
		<option value="">Where did you hear about us?</option>
		</select>
		<br>
		<input ng-model="person.newsletterOptIn" type="checkbox" name="newsletterOptIn" id="newsletterOptIn" value="newsletterOptIn"/>
		
		<label for="newsletterOptIn">Recieve monthly
		newsletter</label>
		
		<br><input type="submit" value="Register" ng-click="register()">
		<div ng-show="registrationForm.$pristine">Form input has not yet started</div>
		<div ng-show="registrationForm.$dirty">Form input has started</div>
		<div ng-show="doShow">Thank you for taking the time to register!</div>
		
	</form>
 
</body>

</html>
 