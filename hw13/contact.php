<!doctype html>
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

         <link rel="stylesheet" href="../hw13/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="../hw13/assets/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="../hw13/assets/css/fontAwesome.css">
        <link rel="stylesheet" href="../hw13/assets/css/light-box.css">
        <link rel="stylesheet" href="../hw13/assets/css/templatemo-main.css">
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
            <td><a href="../hw13/index.html">Home</a></td>
           <td><a href="../hw13/school.html">School</a></td>
            <td><a href="../hw13/dreamjob.html">Dream Job</a></td>
            <td><a href="../hw13/hobbies.html">Hobbies</a></td>
            <td><a href="../hw13/contact.html">Contact</a></td>
          </ul>
        </nav>
        	
	
						
							
	<?php
		if(!isset($_POST['submit'])) 
		{
			?>
	
	<div class="slides">
           <div class="slide" id="5">
            <div class="content second-content">
                <div class="container-fluid" style="background:white">
                    <div class="col-md-6">
                        <div class="left-content" >
							<h2 style="color:black">Contact</h2>
							
			<form method="post" action="contact.php" id="mainform">
			<!--First name form-->
			<div class="form-group" id="firstStatus">
				<label class="control-label" for="firstName">Please enter a first name:</label>
				<input type="text" id="firstName" name="firstName" class="form-control" />
				<div class="control-label" id="firstFeedback"></div>
			</div>

			<!--Last name form-->
			<div class="form-group" id="lastStatus">
				<label class="control-label" for="lastName">Please enter a last name:</label>
				<input type="text" id="lastName" name="lastName" class="form-control" />
				<div class="control-label" id="lastFeedback"></div>
			</div>

			<!--Email form-->
			<div class="form-group" id="emailStatus">
				<label class="control-label" for="emailAddress">Please add an email:</label>
				<input type="text" id="emailAddress" name="emailAddress" class="form-control" />
				<div class="control-label" id="emailFeedback"></div>
			</div>

			<!--Phone form-->
			<div class="form-group" id="phoneStatus">
				<label class="control-label" for="phoneNumber">Please add a phone number:</label>
				<input type="text" id="phoneNumber" name="phoneNumber" class="form-control" />
				<div class="control-label" id="phoneFeedback"></div>
			</div>

			<!--Username form-->
			<div class="form-group" id="userStatus">
				<label class="control-label" for="username">Please create a username:</label>
				<input type="text"  id="username" name="username" class="form-control"/>
				<div class="control-label" id="userFeedback"></div>
			</div>

			<!--Password form-->	
			<div class="form-group" id="passStatus">
				<label class="control-label" for="password">Please create a password:</label>
				<input type="password" id="password" name="password" class="form-control"/>
				<div class="control-label" id="passFeedback"></div>
			</div>

			<!--Comment form-->	
			<div class="form-group" id="commStatus">
				<label class="control-label" for="comment">Add your comment here:</label>
				<input type="text" id="comment" name="comment" class="form-control" />
				<div class="control-label" id="commFeedback"></div>
				</div>

			<div class="form-group">
				<button type="submit" name="submit" value="submit">Submit</button>
			</div>
	</form>					
		<?php
		}
		 else 
		 {
			echo'<div class="slides">';
            echo'<div class="slide" id="5">';
            echo'<div class="content second-content">';
            echo'<div class="container-fluid">';
            echo'<div class="col-md-6">';
            echo'<div class="left-content" >';
			echo'<h2 style="color:black">Contact</h2>';
			echo"<h2>Hello from results</h2>";
			echo'<p>First Name: '.$_POST['firstName'].'</p>';
			echo'<p>Last Name: '.$_POST['lastName'].'</p>';
			echo'<p>Email: '.$_POST['emailAddress'].'</p>';
			echo'<p>Phone Number: '.$_POST['phoneNumber'].'</p>';
			echo'<p>Username: '.$_POST['username'].'</p>';
			echo'<p>Password: '.$_POST['password'].'</p>';
			echo'<p>Comment: '.$_POST['comment'].'</p>';
	 	}
			?>		
			</div>
           </div>
         </div>
       </div>
    </div>
	</div>
	
	<script src="../hw13/assets/js/add-content.js"></script>
	<script src="../hw13/assets/js/event-attributes.js"></script>
</body>
	
</html>


