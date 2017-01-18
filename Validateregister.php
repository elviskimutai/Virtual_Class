<?php
   $mysqli=new mysqli('localhost','root','','virtual_class');
if (isset($_POST['register'])) {
	$Fname={$mysqli->real_escape_string($_POST['fname'])};
	$Sname={$mysqli->real_escape_string($_POST['sname'])};
	$Email={$mysqli->real_escape_string($_POST['email'])};
	$Phone={$mysqli->real_escape_string($_POST['pno'])};
	$Pass={$mysqli->real_escape_string($_POST['password'])};
	
	$sql="NSERT INTO members(fname,lname,emal,phone_no,pass)VALUES('$Fname','$Sname','$Email','$Phone','$Pass')";
	$insert=$mysqli->query($sql);
	echo "succes";
	$mysqli->close();
	# code...
}

?>