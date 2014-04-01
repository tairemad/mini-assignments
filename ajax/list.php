<?php


$people = array("Jacob",
"Sophia",
"Mason",
"Isabella",
"William",
"Emma",
"Jayden",
"Olivia",
"Noah",
"Ava",
"Michael",
"Emily",
"Ethan",
"Abigail",
"Alexander",
"Madison",
"Aiden",
"Mia",
"Daniel",
"Chloe",
"Mya");




$letters=$_GET["letters"];


if (strlen($letters) > 0)
  {
  $name="";
  for($i=0; $i<count($people); $i++)
    {
		if (strpos($people[$i], $_GET['letters']) !== FALSE && (strlen($letters)) >= 0)
    
      {
      if ($name=="")
        {
        $name=$people[$i];
        }
      else
        {
        $name=$name." , ".$people[$i];
        }
      }
    }
  }


if ($name == "")
  {
  $response="no name listed";
  }
else
  {
  $response=$name;
  }


echo $response;

?>