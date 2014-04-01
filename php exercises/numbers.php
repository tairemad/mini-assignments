<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>WDIM 370 - Week 5</title>
<!--Author: Tairema Dailey
-->
<link href="scripts/main.css" type="text/css" rel="stylesheet"/></head>

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
$number = $_POST['num'];
$numDisplay = "";

if ($number > 12)
{
	echo "You must enter a number between 1 and 12. Please <a href='week5.php'><u>go back</u></a> and try again.";
}
else if ($number == 1)
{
	$numDisplay="1 x 1 = 1 <br>
2 x 1 = 2 <br>
3 x 1 = 3 <br>
4 x 1 = 4 <br>
5 x 1 = 5 <br>
6 x 1 = 6 <br>
7 x 1 = 7 <br>
8 x 1 = 8 <br>
9 x 1 = 9 <br>
10 x 1 = 10 <br>
11 x 1 = 11 <br>
12 x 1 = 12" ;
}

else if($number == 2)
{
	$numDisplay="1 x 2 = 2 <br>
2 x 2 = 4 <br>
3 x 2 = 6 <br>
4 x 2 = 8 <br>
5 x 2 = 10 <br>
6 x 2 = 12 <br>
7 x 2 = 14 <br>
8 x 2 = 16 <br>
9 x 2 = 18 <br>
10 x 2 = 20 <br>
11 x 2 = 22 <br>
12 x 2 = 24";
}
else if($number == 3)
{
	$numDisplay="1 x 3 = 3 <br>
2 x 3 = 6 <br>
3 x 3 = 9<br>
4 x 3 = 12<br>
5 x 3 = 15<br>
6 x 3 = 18<br>
7 x 3 = 21<br>
8 x 3 = 24<br>
9 x 3 = 27<br>
10 x 3 = 30<br>
11 x 3 = 33<br>
12 x 3 = 36";
	
}
else if($number == 4)
{
	$numDisplay="1 x 4 = 4<br>
2 x 4 = 8<br>
3 x 4 = 12<br>
4 x 4 = 16<br>
5 x 4 = 20<br>
6 x 4 = 24<br>
7 x 4 = 28<br>
8 x 4 = 32<br>
9 x 4 = 36<br>
10 x 4 = 40<br>
11 x 4 = 44<br>
12 x 4 = 48";
	
}
else if($number == 5)
{
	$numDisplay="1 x 5 = 5<br>
2 x 5 = 10<br>
3 x 5 = 15<br>
4 x 5 = 20<br>
5 x 5 = 25<br>
6 x 5 = 30<br>
7 x 5 = 35<br>
8 x 5 = 40<br>
9 x 5 = 45<br>
10 x 5 = 50<br>
11 x 5 = 55<br>
12 x 5 = 60";
}
else if($number == 6)
{
	$numDisplay="1 x 6 = 6<br>
2 x 6 = 12<br>
3 x 6 = 18<br>
4 x 6 = 24<br>
5 x 6 = 30<br>
6 x 6 = 36<br>
7 x 6 = 42<br>
8 x 6 = 48<br>
9 x 6 = 54<br>
10 x 6 = 60<br>
11 x 6 = 66<br>
12 x 6 = 72";
}
else if($number == 7)
{
	$numDisplay="1 x 7 = 7<br>
2 x 7 = 14<br>
3 x 7 = 21<br>
4 x 7 = 28<br>
5 x 7 = 35<br>
6 x 7 = 42<br>
7 x 7 = 49<br>
8 x 7 = 56<br>
9 x 7 = 63<br>
10 x 7 = 70<br>
11 x 7 = 77<br>
12 x 7 = 84";
}
else if($number == 8)
{
	$numDisplay="1 x 8 = 8<br>
2 x 8 = 16<br>
3 x 8 = 24<br>
4 x 8 = 32<br>
5 x 8 = 40<br>
6 x 8 = 48<br>
7 x 8 = 56<br>
8 x 8 = 64<br>
9 x 8 = 72<br>
10 x 8 = 80<br>
11 x 8 = 88<br>
12 x 8 = 96";
}
else if($number == 9)
{
	$numDisplay="1 x 9 = 9<br>
2 x 9 = 18<br>
3 x 9 = 27<br>
4 x 9 = 36<br>
5 x 9 = 45<br>
6 x 9 = 54<br>
7 x 9 = 63<br>
8 x 9 = 72<br>
9 x 9 = 81<br>
10 x 9 = 90<br>
11 x 9 = 99<br>
12 x 9 = 108";
}
else if($number == 10)
{
	$numDisplay="1 x 10 = 10<br>
2 x 10 = 20<br>
3 x 10 = 30<br>
4 x 10 = 40<br>
5 x 10 = 50<br>
6 x 10 = 60<br>
7 x 10 = 70<br>
8 x 10 = 80<br>
9 x 10 = 90<br>
10 x 10 = 100<br>
11 x 10 = 110<br>
12 x 10 = 120";
}
else if($number == 11)
{
	$numDisplay="1 x 11 = 11<br>
2 x 11 = 22<br>
3 x 11 = 33<br>
4 x 11 = 44<br>
5 x 11 = 55<br>
6 x 11 = 66<br>
7 x 11 = 77<br>
8 x 11 = 88<br>
9 x 11 = 99<br>
10 x 11 = 110<br>
11 x 11 = 121<br>
12 x 11 = 132";
}
else if($number == 12)
{
	$numDisplay="1 x 12 = 12<br>
2 x 12 = 24<br>
3 x 12 = 36<br>
4 x 12 = 48<br>
5 x 12 = 60<br>
6 x 12 = 72<br>
7 x 12 = 84<br>
8 x 12 = 96<br>
9 x 12 = 108<br>
10 x 12 = 120<br>
11 x 12 = 132<br>
12 x 12 = 144";
}

echo "You picked: $number";

?>
<br />
<br />
<?php echo "The times table for your number is: <br /> $numDisplay"; ?>

</div>


</section>


</div>
<footer>
<p>&copy; 2012 Tairema Dailey </p>
</footer>

</body>
</html>