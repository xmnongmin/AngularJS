<!doctype html>
<html ng-app>
<head>
<meta charset="utf-8">
<title>Listing 2-3</title>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
</head>

<body>
<p ng-show="true">Paragraph 1, can you see me?</p>
<p ng-show="false">Paragraph 2, can you see me?</p>
<p ng-show="1 == 1">Paragraph 3, can you see me?</p>
<p ng-show="<?php echo 1==2; ?>">Paragraph 4, can you see me?</p>
 
</body>
</html>