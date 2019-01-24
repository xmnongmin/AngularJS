
// create a new module called 'myAppModule' and save 
// a reference to it in a variable called myAppModule 
var myAppModule = angular.module('myAppModule', []);
 
// use the myAppModule variable to 
// configure the module with a controller 
myAppModule.controller('myProductDetailCtrl', function ($scope) {
	$scope.isHidden = true;
	 $scope.showHideColors = function () {
		 $scope.isHidden = !$scope.isHidden;
	}
    
} );
 