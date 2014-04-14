<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("cdcol", $con);

$result = mysql_query("SELECT * FROM user");
$flag = false;

while($row = mysql_fetch_array($result))
  {
  	if ($_POST['name']==$row['name'] &&  $_POST['password']==$row['password'] )
  		$flag = true;
  }

  if ($flag==true)
  {
  	echo "This is your own page. Welcome ".$_POST['name'] ;
  	
  }
  else
  {
  	echo "your name and password are not matched!";

  }

mysql_close($con);
?>