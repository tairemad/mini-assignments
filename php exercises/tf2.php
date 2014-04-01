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
$selection1 = $_POST['tf1'];
$answer1 = "";
$score1= "";
$score = $_POST['score'];
if($_POST['tf1'] == 'True')
{
	$answer1 = "Your answer is wrong! It is a fruit.";
	$score1 = 0;
}
else if ($_POST['tf1'] == 'False')
{
	$answer1 = "Your answer is correct!"; 
	$score1= 1;
}

echo "You selected: $selection1 <br /> $answer1";

?>
<br />
<br />
<p>3. Alfred Hitchcock didn't have a belly button?</p>
<br />
<form method="post" action="tf3.php">
<input type="hidden" name="" value = '<?php echo $selection; ?>' />
<input type="hidden" name="" value = '<?php echo $selection1; ?>' />
<input type="hidden" name="score" value='<?php echo $score; ?>' />
<input type="hidden" name="score1" value='<?php echo $score1; ?>' />
<input type="radio" name="tf2" id="radio" value="True" />True
<input type="radio" name="tf2" id="radio" value="False" />False
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