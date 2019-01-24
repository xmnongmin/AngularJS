var myAppModule = angular.module("myAppModule",[]);

myAppModule.controller('myProductDetailCtrl',function($scope){

	$scope.isHidden = true;
	$scope.showColor = function(){
		$scope.isHidden = !$scope.isHidden;
	}
});