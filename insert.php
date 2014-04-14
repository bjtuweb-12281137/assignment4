<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("cdcol", $con);

if ($_POST['password'] == 0 ||$_POST['name'] == 0 ||$_POST['passwordagain'] == 0) {
	echo "Some of your message is empty! Please return and add it!";
}
elseif($_POST['password'] != $_POST['passwordagain']) {
	echo "The password and the password again are not the same! Please return and change it!";
}
else{

	$sql="INSERT INTO user (name, password)
	VALUES
	('$_POST[name]','$_POST[password]')";

	if (!mysql_query($sql,$con))
	  {
	  die('Error: ' . mysql_error());
	  }
	echo "A new member is added in the database. Please return and login.";

	mysql_close($con);
}


?>
