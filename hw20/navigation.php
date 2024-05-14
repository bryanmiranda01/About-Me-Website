<?php
//<!--	Navbar-->
echo '<nav>';
echo '<div class="logo">';
echo	'<img src="../images/AdobeBanner.jpeg" alt="">';
echo	'</div>';
echo '<div class="mini-logo">';
echo	'<img src="../images/AdobeBanner.jpeg" alt="">';
echo '</div>';
echo	'<ul>';
if(!isset($_GET['page']))
				$page="home";
			else	
				$page=$_GET['page'];
	if($page="home")
		echo '<td class="active"><td><a href="../hw20/index.php?page=home">Home</a></td>';
	else	
		echo '<td><a href="../hw20/index.php?page=home">Home</a></td>';
		
	if($page="school")
		echo '<td class="active"><td><a href="../hw20/index.php?page=school">School</a></td>';
	else	
		echo '<td><a href="../hw20/index.php?page=school">School</a></td>';
		
	if($page="dreamjob")
		echo '<td class="active"><td><a href="../hw20/index.php?page=dreamjob">Dream Job</a></td>';
	else	
		echo '<td><a href="../hw20/index.php?page=dreamjob">Dream Job</a></td>';
		
	if($page="hobbies")
		echo '<td class="active"><td><a href="../hw20/index.php?page=hobbies">Hobbies</a></td>';
	else	
		echo '<td><a href="../hw20/index.php?page=hobbies">Hobbies</a></td>';
		
	if($page="contact")
		echo '<td class="active"><td><a href="../hw20/index.php?page=contact">Contact</a></td>';
	else	
		echo '<td><a href="../hw20/index.php?page=contact">Contact</a></td>';

	if($page="register")
		echo '<td class="active"><td><a href="../hw20/index.php?page=register">Register</a></td>';
	else	
		echo '<td><a href="../hw20/index.php?page=register">Register</a></td>';

	if($page="login")
		echo '<td class="active"><td><a href="../hw20/index.php?page=login">Login</a></td>';
	else	
		echo '<td><a href="../hw20/index.php?page=login">Login</a></td>';
		
echo	'</ul>';
echo '</nav>';
?>