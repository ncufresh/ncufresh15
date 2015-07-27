<?php

//connection
require_once 'login.php';
$db_server = mysqli_connect($db_hostname,$db_username,$db_password);
if(!$db_server) die("Unable to connect to MYSQL");
mysqli_select_db($db_server,$db_database)  or die("Unable to select database");
//new add
$name = htmlspecialchars($_POST['name']) ;
$comment = htmlspecialchars($_POST['comment']) ;
//

if($comment=='')
{
echo "Please input some text.";
}else
{
    $query = "INSERT INTO guestbook VALUES"."('$name','$comment','NULL')";
    if(!mysqli_query($db_server,$query))   echo"INSERT failed";
    	$query ="SELECT max(id) FROM guestbook";
	$result=mysqli_query($db_server,$query);
   if(!$result)die("(1)Can't find the user");
	if(mysqli_num_rows($result)){
		  $row = mysqli_fetch_row($result);

echo <<<_END
<div id="$row[0]" >
<pre>
   Name: $name
   comment: $comment
</pre>
<button value=$row[0] class="delete">delete</button>
</div>
_END;
	}

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