<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hangman</title>
<style type="text/css">
#guess 
{
	font-family:Verdana, Geneva, sans-serif;
	font-size:30pt;
	letter-spacing: 20px;
}
#usedLetters
{
	background-color:#FF9;
	font-family:Verdana, Geneva, sans-serif;
	font-size:18pt;
	height:100px;
	width:315px;
	letter-spacing: 10px;
}

h2 {
	font-family:Verdana, Geneva, sans-serif;
	font-style:italic;
}

#hangForm {
	border-width: 1px;
	border-color:#000;
	border-style:solid;
	padding:5px;
	width:300px;
	margin-top:20px;
}

</style>

<?php
function getChar($word, $whichChar)
{
	return substr($word, $whichChar, 1);
}

function setChar($word, $char, $whichChar)
{
	$word = substr($word, 0, $whichChar) . $char . substr($word, $whichChar+1);
	return $word;
}

$words = array("first", "maniac", "clever", "meat", "something", "phantom", "flour");

$answer = "";
$guessWord = "";
$usedLetters = "";
$newLetter = "";
$s2="";	

if (! isset($_POST['answer']))  //first time
{
	$answer = $words[rand(0, count($words)-1)];
	$guessWord = str_repeat("_", strlen($answer)); 
}
else
{
	$answer = $_POST['answer'];
	$guessWord = $_POST['guessWord'];
	$usedLetters = $_POST['usedLetters'];
	$newLetter = $_POST['letter'];

	$answer = str_ireplace($newLetter, '*', $answer);
	$goodGuess = false;
	for ($i=0; $i< strlen($guessWord); $i++)
	{
		if (getChar ($answer, $i) == '*' && getChar($guessWord, $i) == '_')
		{
			$guessWord = setChar($guessWord, $newLetter, $i);
			$goodGuess = true;
		}
	}
	if (! $goodGuess )
	{
		$usedLetters .= $newLetter;	
	}
	else if (!stristr( $guessWord,"_"))
	{
		echo "You got it correct! Click the \"new game\" button to play again.	<br><br>";
		echo "<form method='get' action='hangman_soln.php'>";
		echo '<input type="submit" value="New Game"><hr width = "350" align="left" />';
	}
}

?>
</head>

<body onload="document.forms[0].letter.focus();">
<div id='guess'><?php echo $guessWord; ?></div>
<br />
<h2>Used letters:</h2>
<div id='usedLetters'><?php echo $usedLetters; ?></div>
<div id='hangman'><?php  echo "<br><b>Bad guess count: </b>" . strlen($usedLetters);  ?></div>
<div id='hangForm'>
<form method='post' action='hangman_soln.php'>
<br />Enter next letter to guess:  <input type="text" name='letter' size='1' /><br />
<input type="hidden" name='answer' value='<?php echo $answer; ?>'/>
<input type="hidden" name='guessWord' value='<?php echo $guessWord; ?>'/>
<input type="hidden" name='usedLetters' value='<?php echo $usedLetters; ?>'/>
<br /><input type="submit" value = 'Submit Guess'/>
</form>
</div>
</body>
</html>
