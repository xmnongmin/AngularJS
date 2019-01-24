<!doctype html>
<html ng-app="myAppModule">
<head>
<meta charset="utf-8">
<title>Listing 2-3</title>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
<script>

var myAppModule = angular.module('myAppModule',[]);

myAppModule.controller('myDemoCtrl', function ($scope) { 
		 $scope.colorsArray = ['red', 'green', 'blue', 'purple', 'olive']
} );
 

myAppModule.directive('colorList', function ($compile) {
 
    return {
 
        restrict: 'AE',
		template: "<button ng-click='showHideColors()' type='button'>" 
		          + "{{isHidden ? 'Show Available Colors' : 'Hide Available Colors'}}"
				  + "</button><div ng-hide='isHidden' id='colorContainer'>"
				  + "</div>", 
				  
		link: function ($scope, $element) {
 
					// set default state of hide/show
					$scope.isHidden = true;
					// add function to manage hide/show state
					$scope.showHideColors = function () { 
						$scope.isHidden = !$scope.isHidden;
					}
 
				// DOM manipulation
				var colorContainer = $element.find('div');
				
				angular.forEach($scope.colorsArray, function (color) { 
					var appendString = "<div style='background-color:"
							+ color + "'>"
							+ color + "</div>";
				    colorContainer.append(appendString);
				});

 		} };//end of return
 
});

</script>

<style>

#colorContainer div {
	 color: white;
	 text-transform: uppercase;
	 width: 200px;
	 padding: 10px;
	 margin:5px;
	 border-radius: 5px;
	 -moz-border-radius: 5px;
	 } 
</style>
 
 
</head>

<body ng-controller="myDemoCtrl">   
<h2>AngularJS Socks</h2>
<p>Keep warm this winter with our 100% wool, 100% cool, AngularJS socks!</p>
<div color-list colors="colorsArray"></div>
 
</body> 
</html>