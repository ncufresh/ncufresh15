<?php

//connection
require_once 'login.php';
$db_server = mysqli_connect($db_hostname,$db_username,$db_password);
if(!$db_server) die("Unable to connect to MYSQL");
mysqli_select_db($db_server,$db_database)  or die("Unable to select database");

$id = htmlspecialchars($_POST['id']) ;
//
if(isset($id)){

    $query = "DELETE FROM guestbook WHERE id='$id'";
    if(!mysqli_query($db_server,$query))  echo"DELETE failed";

	echo $id;
}

/*
	$query = "SELECT * FROM guestusers WHERE username='$name'";
	$result=mysqli_query($db_server,$query);
	$row=mysqli_fetch_row($result);

echo <<<_END
<form action="comment.php" method="post">
<input type="hidden" name="delete" value="yes" />
<input type="hidden" name="id" value=$row[2]>
<input type="hidden" name="username" value=$name />
</form>
<button type="submit" value="delete">delete</botton>
_END;
*/
?>