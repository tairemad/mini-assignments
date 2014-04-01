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
$selection2 = $_POST['tf2'];
$answer2 = "";
$score2 = "";
$score = $_POST['score'];
$score1 = $_POST['score1'];

if($_POST['tf2'] == 'True')
{
	$answer2 = "Your answer is correct!";
	$score2 = 1;
}
else if ($_POST['tf2'] == 'False')
{
	$answer2 = "Your answer is wrong! It is True!"; 
	$score2 = 0;
}

echo "You selected: $selection2 <br /> $answer2";

?>

<?php



$totscore = $score + $score1 + $score2


//if($selection == 'True')
//{
//	$score1 = 1;
//}
//else if($selection == 'False')
//{
//	$score2 = 0;
//}
//else if($selection1 == 'True')
//{
//	$score3 = 0;
//}
//else if($selection1 == 'False')
//{
//	$score4 = 1;
//}
//else if($selection2 == 'True')
//{
//	$score5 = 1;
//}
//else if ($selection2 == 'False')
//{
//	$score6 = 0;
//}

?>

<br />
<br />
<p>Your total of correct answers is: <?php extract ($_REQUEST); echo"<u>$totscore</u> out of 3";?></p>
<br />

</div>


</section>


</div>
<footer>
<p>&copy; 2012 Tairema Dailey </p>
</footer>

</body>
</html>