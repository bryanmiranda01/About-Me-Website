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

        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="assets/css/fontAwesome.css">
        <link rel="stylesheet" href="assets/css/light-box.css">
        <link rel="stylesheet" href="assets/css/templatemo-main.css">
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
            <td><a href="../hw12/index.html">Home</a></td>
           <td><a href="../hw12/school.html">School</a></td>
            <td><a href="../hw12/dreamjob.html">Dream Job</a></td>
            <td><a href="../hw12/hobbies.html">Hobbies</a></td>
            <td><a href="../hw12/contact.html">Contact</a></td>
          </ul>
        </nav>
        	
	<div class="slides">
           <div class="slide" id="5">
            <div class="content second-content">
                <div class="container-fluid" background-color= white>
                    <div class="col-md-6">
                        <div class="left-content" >
							<h2 style="color:white;"
						
			<?php
						
			if(isset($_GET['submit'])) 
			{
				echo"<h2>hello from results</h2>";
				echo'<p>First Name: '.$_GET['firstName'].'</p>';
				echo'<p>Last Name: '.$_GET['lastName'].'</p>';
				echo'<p>Email: '.$_GET['emailAddress'].'</p>';
				echo'<p>Phone Number: '.$_GET['phoneNumber'].'</p>';
				echo'<p>Username: '.$_GET['username'].'</p>';
				echo'<p>Password: '.$_GET['password'].'</p>';
				echo'<p>Comment: '.$_GET['comment'].'</p>';
				}
				else 
				{
					echo"<h2>Error: Please return to contact form and hit submit</h2>";
				}
			?>
					</h2>								
             </div>
           </div>
         </div>
       </div>
    </div>
	</div>
	
	<script src="assets/js/add-content.js"></script>
	<script src="assets/js/event-attributes.js"></script>
</body>
	
</html>