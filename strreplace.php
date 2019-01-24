<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<script>
function toTitleCase(str)    {
	return str.replace(/\w\S*/g, function(txt){return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();});    }
 
    console.log(toTitleCase("jennifer"));    
	console.log(toTitleCase("jENniFEr"));    
	console.log(toTitleCase("jENniFEr amanda Grant"));
 
</script>
 
 
</head>

<body>
</body>
</html>