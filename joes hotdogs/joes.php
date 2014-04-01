<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>joes hotdogs</title>
<!--Author: Tairema Dailey
-->
<link href="scripts/main.css" type="text/css" rel="stylesheet"/>
</head>

<body>
<div id="wrapper">
<header>
<?php include("_includes/header.php");?>
</header>
<aside>
<?php include("_includes/links.php");?>
</aside>
<section>
<div id="rFormD">

<script type="text/javascript">


function getQuant()
{
	with(document.form1)
	{
	if (isNaN(numDogs.value || numFries.value || numSodas.value))
	{
		alert("Quantity must be a number");
		numDogs.focus();
		return false;
	}
	
	var quantityDogs = 0;
	var quantityFries = 0;
	var quantitySodas = 0;
	if(numDogs.value != "" || numFries.value != "" || numSodas.value != "")
	{
		quantityDogs = parseFloat(numDogs.value);
		quantityFries = parseFloat(numFries.value);
		quantitySodas = parseFloat(numSodas.value);
	}
	else
	{
		quantityDogs = parseFloat(numDogs.value = 0);
		quantityFries = parseFloat(numFries.value = 0);
		quantitySodas = parseFloat(numSodas.value = 0);
	}
	return quantityDogs, quantityFries, quantitySodas;
    }
}



</script>


<h1>Joe’s Hotdogs</h1>
<br> 

<form name = "form1" id="form1" method="get" action="order.php" onsubmit="return getQuant()" >
<p>Number of Hotdogs $2.25: <input type="text" name="numDogs" id="numDogs"></p> 
<p>Number of Fries $1.25: <input type="text" name="numFries" id="numFries"></p> 
<p>Number of Sodas $0.75: <input type="text" name="numSodas" id="numSodas"></p> 
<p><input type="submit" value="Total"/></p>
</form>
<br>
<br>
<br>




</div>


</section>


</div>
<footer>
<p>&copy; 2012 Tairema Dailey </p>
</footer>
</body>
</html>