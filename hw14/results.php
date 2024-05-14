<html>
<head>
<meta charset="utf-8">
<title>Welcome to Bryan Miranda's homepage</title>
	<link rel="stylesheet" type="text/css" 
        href="../css/styles.css">
	
	<!--Bootstrap template-->
	
		<meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	
    <!--    <link rel="apple-touch-icon" href="apple-touch-icon.png"> -->

        <link rel="stylesheet" href="../hw14/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="../hw14/assets/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="../hw14/assets/css/fontAwesome.css">
        <link rel="stylesheet" href="../hw14/assets/css/light-box.css">
        <link rel="stylesheet" href="../hw14/assets/css/templatemo-main.css">
</head>

<body>
	<div class="sequence">
    </div>
        <nav>
          <div class="logo">
              <img src="../images/AdobeBanner.jpeg" alt="">
          </div>
          <div class="mini-logo">
              <img src="../images/AdobeBanner.jpeg" alt="">
          </div>
          <ul>
            <td><a href="../hw14/index.html">Home</a></td>
           <td><a href="../hw14/school.html">School</a></td>
            <td><a href="../hw14/dreamjob.html">Dream Job</a></td>
            <td><a href="../hw14/hobbies.html">Hobbies</a></td>
            <td><a href="../hw14/contact.php">Contact</a></td>
          </ul>
        </nav>
        	
	<div class="slides">
           <div class="slide" id="5">
            <div class="content second-content">
                <div class="container-fluid">
                    <div class="col-md-6">
                        <div class="left-content">
							<h2 style="color:white;"
						
			<?php
						
			if(isset($_POST['submit'])) 
			{
				echo"<h2>hello from results</h2>";
				echo'<p>First Name: '.$_POST['firstName'].'</p>';
				echo'<p>Last Name: '.$_POST['lastName'].'</p>';
				echo'<p>Email: '.$_POST['emailAddress'].'</p>';
				echo'<p>Phone Number: '.$_POST['phoneNumber'].'</p>';
				echo'<p>Username: '.$_POST['username'].'</p>';
				echo'<p>Password: '.$_POST['password'].'</p>';
				echo'<p>Comment: '.$_POST['comment'].'</p>';
				}
				else 
				{
					header("Location: contact.php");
				}
			?>
					</h2>								
             </div>
           </div>
         </div>
       </div>
    </div>
	</div>
	
	<script src="../hw14/assets/js/add-content.js"></script>
	<script src="../hw14/assets/js/event-attributes.js"></script>
</body>
	
</html>