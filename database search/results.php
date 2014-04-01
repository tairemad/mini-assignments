<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Results</title>




</head>

<body>
<?php
$connection = mysql_connect ("localhost", "root", "root");
	if (!$connection) {
		die("Database connection failed: "
. mysql_error());}
$db_select = mysql_select_db("quiz", $connection);
	if (!$db_select) {
		die("Database selection failed: "  .mysql_error());}
		
		
$lname = $_POST['lname'];

$sql = mysql_query("select * from users where lname like '%$lname%'");

while ($row = mysql_fetch_array($sql)){
    echo 'First Name: '.$row['fname'];
    echo '<br/> Last Name: '.$row['lname'];
	echo '<br/> Email: '.$row['email'];
    echo '<br/> Phone: '.$row['phone'];
    echo '<br/><br/>';
    }

?>


</body>
</html>