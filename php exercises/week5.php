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
<p>1.	Create a page with a list box that displays the names of several possible images. When the form is submitted, a second page should display it.</p>
<br />

<h1>Select an Actor</h1>
<br />
<form name="form1" method="post" action="pics.php">
<select name="selectActor">
<option value="" disabled="disabled" selected="selected">Select an Actor</option>
<option value="Kellan">Kellan Lutz</option>
<option value="Nina">Nina Dobrev</option>
<option value="Chris">Chris Helmsworth</option>
<option value="Kristen">Kristen Stewart</option>
<option value="Robert">Robert Pattinson</option>
<option value="Emma">Emma Stone</option>
</select>
<br />
<input type="submit" name="button" id="button" value="Submit" />
</form>
<br />
<p>2.	Create a page that displays several possible images. When the form is submitted, a second page should display the image and a caption for the image </p>

<br />
<h1>Select an Image</h1>

<br />

<div id="rImgSection">


<a name="Big C"href="images.php?$selCaption1='The Big C';$image1='<img src="images/tvimgs/bigc.jpg"';" target="_blank"><img src="images/tvimgs/thumbs/thumb_bigc.jpg" class="selImg" width="100" height="100" alt="" name="Big C"></a>
<a name="Dexter" href="images1.php?$selCaption2='Dexter';$image2='<img src="images/tvimgs/dexter.jpg"';" target="_blank"><img src="images/tvimgs/thumbs/thumb_dexter.jpg" class="selImg" width="100" height="100" alt="" name="Dexter"></a>
<a name="Supernatural" href="images2.php?$selCaption3='Supernatural';$image3='<img src="images/tvimgs/Supernatural.jpg"';" target="_blank"><img src="images/tvimgs/thumbs/thumb_supernatural.jpg" class="selImg" width="100" height="100" alt="" name="Supernatural"></a>
<a name="Scandal" href="images3.php?$selCaption4='Scandal';$image4='<img src="images/tvimgs/scandal.jpg"';" target="_blank"><img src="images/tvimgs/thumbs/thumb_scandal.jpg" class="selImg" width="100" height="100" alt="" name="Scandal"></a>
<a name="The Vampire Diaries" href="images4.php?$selCaption5='The Vampire Diaries';$image5='<img src="images/tvimgs/tvd.jpg"';" target="_blank"><img src="images/tvimgs/thumbs/thumb_tvd.jpg" class="selImg" width="100" height="100" alt="" name="The Vampire Diaries"></a>

</div>



<br />
<p>3.	Get a number from the user in an html form and use method = “get”.  </p>
<br />
<h1>Enter a number:</h1>
<form name="form2" method="post" action="numbers.php">
<input type="text" name="num">
<br />
<input type="submit" name="button" id="button" value="Submit" />
</form>
<br />
<p>
4.	Create three pages that each ask the user a T/F question and then show the results:</p>

<h1>Answer - True or False</h1>
<br />
<p>1. PHP was created in 1994 by Rasmus Lerdorf?</p>
<form method="post" action="tf1.php">
<input type="radio" name="tf" id="radio" value="True" />True
<input type="radio" name="tf" id="radio" value="False" />False
<br />
<input type="submit" name="button" id="button" value="Submit" />
</form>
<br />
<br />
<br />


</div>


</section>


</div>
<footer>
<p>&copy; 2012 Tairema Dailey </p>
</footer>

</body>
</html>