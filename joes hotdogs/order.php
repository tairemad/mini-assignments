<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>WDIM 370 - Week 4</title>
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

<?php
$dogs = 2.25;
$fries = 1.25;
$sodas = .75;
$totdogs = $dogs * $_GET["numDogs"];
$totfries = $fries * $_GET["numFries"];
$totsodas = $sodas * $_GET["numSodas"];
$total = $totdogs + $totfries + $totsodas;
?>



<p><?php echo"Your order is:"; ?></p>
<p><?php echo"The total of hotdogs you ordered:" . ($_GET["numDogs"]); ?> &nbsp; &nbsp;<?php echo"Price: " . "$" . $totdogs; ?></p>
<p><?php echo"The total of fries you ordered:" . ($_GET["numFries"]); ?> &nbsp; &nbsp;<?php echo"Price: " .  "$" . $totfries; ?></p>
<p><?php echo"The total of sodas you ordered:" . ($_GET["numSodas"]); ?> &nbsp; &nbsp;<?php echo"Price: " .  "$" . $totsodas; ?></p>
<br>
<p><?php echo"Your total price is: " .  "$" . $total; ?> </p>

</div>
</section>
</div>
<footer>
<p>&copy; 2012 Tairema Dailey </p>
</footer>
</body>
</html>