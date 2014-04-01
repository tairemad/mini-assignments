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
$selection = $_POST['tf'];
$answer = "";
$score = "";

if($_POST['tf'] == 'True')
{
	$answer = "Your answer is correct!";
	$score = 1;
}
else if ($_POST['tf'] == 'False')
{
	$answer = "Your answer is wrong! It is True!"; 
	$score = 0;
}

echo "You selected: $selection <br /> $answer";

?>
<br />
<br />
<p>2. Cucumber is a vegetable?</p>
<br />
<form method="post" action="tf2.php">
<input type="hidden" name="" value = '<?php echo $selection; ?>' />
<input type="hidden" name="score" value='<?php echo $score; ?>' />
<input type="radio" name="tf1" id="radio" value="True" />True
<input type="radio" name="tf1" id="radio" value="False" />False
<br />
<input type="submit" name="button" id="button" value="Submit" />
</form>

</div>


</section>


</div>
<footer>
<p>&copy; 2012 Tairema Dailey </p>
</footer>

</body>
</html>