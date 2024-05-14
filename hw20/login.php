<?php
echo '<section if="home">';
if(!isset($_POST['submit']))
{
	echo '<div class="slides">';
	echo '<div class="slide" id="6">';
	echo '<div class="content second-content" style="background-color: white">';
	echo '<div class="container-fluid" >';
	echo '<div class="col-md-6">';
	echo '<div class="left-content">';
	
	echo '<h2 style="color:black"="black">LOGIN: Please fill out the form below.</h2>';
	echo '<form method="post" action="">';
	echo '<div class="form-group" id="userStatus">';
	echo '<label class="control-label" for="username">Username: </label>';
	echo '<input type="text" id="username" name="username" class="form-control"/>';
	echo '<div class="control-label" id="userFeedback"></div>';
	echo '</div>';
	echo '<div class="form-group" id="passStatus">';
	echo '<label class="control-label" for="password">Please enter a password </label>';
	echo '<input type="password" id="password" name="password" class="form-control"/>';
	echo '<div class="control-label" id="passFeedback"></div>';
	echo '</div>';
	echo '<button type="submit" name="submit" value="submit">Submit</button>';
	echo '</form>';
}

if(isset($_POST['submit']))
{
	$username=addslashes($_POST['username']);
	$passText=$_POST['password'];
	$salt="CS4413SP24-01";
	$password=hash('sha256', $salt.$passText.$username);
	$dblink=db_connect("user_data");
	$sql="Select `auto_id` from `accounts` where `auth_hash`='$password'";
	$result=$dblink->query($sql) or
		die("<p>Something went wrong with $sql<br>".$dblink->error);
	if($result->num_rows<=0)
		redirect("index.php?page=login&errMsg=invalidAuth");
	else
	{
		$salt=microtime();
		$sid=hash('sha256',$salt.$password);
		$sql="Update `accounts` set `session_id`='$sid' where `auth_hash`='$password'";
		$dblink->query($sql) or
			die("<p>Something went wrong with $sql<br>".$dblink->error);
		redirect("index.php?page=results&sid=$sid");	
	}
}
echo '</section>';
?>