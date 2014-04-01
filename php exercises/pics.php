<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>WDIM 370 - Week 5</title>
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


$img = "";

$actor = $_POST['selectActor'];

if ($_POST['selectActor'] == 'Kellan') 
{ 
$img = '<img src="images/actors/kl.jpg">';
}
else if ($_POST['selectActor'] == 'Nina')
{
	$img = '<img src="images/actors/nd.jpg">';
}
else if ($_POST['selectActor'] == 'Chris')
{
	$img = '<img src="images/actors/ch.jpg">';
}
else if ($_POST['selectActor'] == 'Kristen')
{
	$img = '<img src="images/actors/ks.jpg">';
}
else if ($_POST['selectActor'] == 'Robert')
{
	$img = '<img src="images/actors/rp.jpg">';
}
else if($_POST['selectActor'] == 'Emma')
{
	$img = '<img src="images/actors/es.png">';
}

echo "$actor";

?>

<br/>

<?php echo "$img"; ?>

</div>


</section>


</div>
<footer>
<p>&copy; 2012 Tairema Dailey </p>
</footer>





</body>
</html>