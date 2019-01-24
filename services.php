<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Angular Form</title>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>

<script>
	var myAppModule = angular.module('myAppModule', []);
	
	myAppModule.factory("memberDataStoreService",function($http){
		var memberDataStore={};
		memberDataStore.doRegistration = function(theData){
			var promise = $http({method:"POST",
								 url:'register.php',
								 data:theData}
							   );
			return promise;
		}
		return memberDataStore;
	});
	
	myAppModule.controller('MyController', function($scope,memberDataStoreService){
		var person = {

			channels: [
			{ value: "television", label: "Television" },
			{ value: "radio", label: "Radio" },
			{ value: "social-media", label: "Social Media"},
			{ value: "other", label: "Other"}
			],
			newsletterOptIn: true
			
		};

		$scope.person = person;
						   
		$scope.register = function(){
			
			$scope.firstNameInvalid = false;
			$scope.lastNameInvalid = false;
			$scope.emailInvalid = false;
			$scope.levelInvalid = false;
			
			$scope.showSuccessMessage = false;
			$scope.showErrorMessage = false;
			
			if(!$scope.registrationForm.firstName.$valid){
				$scope.firstNameInvalid = true;
			}
			
			if(!$scope.registrationForm.lastName.$valid){
				$scope.lastNameInvalid = true;
			}
			
			if(!$scope.registrationForm.email.$valid){
				$scope.emailInvalid = true;
			}

			if(!$scope.registrationForm.level.$valid){
				$scope.levelInvalid = true;
			}

			if($scope.registrationForm.$valid){
				$scope.working = true;
				
				var promise = memberDataStoreService.doRegistration($scope.person);
				promise.success(function (data, status) {
					$scope.showSuccessMessage = true;
				});
				promise.error(function (data, status) {
					$scope.showErrorMessage = true;
				});
				promise.finally(function(data,status){
					$scope.working = false;
				});
				$scope.doShow = true;
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


	<form name="registrationForm" ng-submit="register()" novalidate>
		<div ng-show="showSuccessMessage">
			Thank you for taking the time to register!
		</div>
		<div class="error" ng-show="showErrorMessage">
			There appears to have been a problem with your registration.<br/>
		</div>
		
		<input type="text" placeholder="First Name" name="firstName" ng-model="person.firstName" required>
		<span ng-show="firstNameInvalid">Please enter a value for First Name</span>
		<br/>
		<input type="text" placeholder="Last Name" name="lastName" ng-model="person.lastName" required>
		<span ng-show="lastNameInvalid">Please enter a value for Last Name</span>
		<br/>
		<input type="email" placeholder="Email" name="email" ng-model="person.email" required>
		<span ng-show="emailInvalid"><br/>A valid email address is required</span>
		<br/>
		<select name="level" ng-model="person.levels"  ng-options="obj.value as obj.label for obj in person.channels">
		<option value="">Where did you hear about us?</option>
		</select>
		<span ng-show="levelInvalid"><br/>Please tell us where did you hear about us</span>
		<br>
		<input ng-model="person.newsletterOptIn" type="checkbox" name="newsletterOptIn" id="newsletterOptIn" value="newsletterOptIn"/>
		
		<label for="newsletterOptIn">Recieve monthly
		newsletter</label>
		
		<br><input ng-disable="working" type="submit" value="Register">
		<span ng-show="working" style="padding-left:10px;">
			<img src="images/loading.gif">
		</span>
		
		
	</form>
 
</body>

</html>
 