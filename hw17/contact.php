<head>
<meta charset="utf-8">
<title>Welcome to Bryan Miranda's homepage</title>
	<link rel="stylesheet" type="text/css" 
        href="../css/styles.css">
	
	<!--Bootstrap template-->
	
		<meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	
    <!--    <link rel="apple-touch-icon" href="apple-touch-icon.png"> -->
        <link rel="stylesheet" href="../hw17/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="../hw17/assets/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="../hw17/assets/css/fontAwesome.css">
        <link rel="stylesheet" href="../hw17/assets/css/light-box.css">
        <link rel="stylesheet" href="../hw17/assets/css/templatemo-main.css">
</head>

<body>
	<?php
		session_start();
		if (!isset($_POST['submit'])) 
		{
			echo '<div class="slides">';
			echo '<div class="slide" id="5">';
			echo '<div class="content second-content">';
			echo '<div class="container-fluid" style="background-color: white">';
			echo '<div class="col-md-6">';
			echo '<div class="left-content">';
			echo '<h2 style="color:black">Contact</h2>';
			echo '<form method="post" id="mainform" action="">';

				// <!--First name error form-->
				if (isset($_GET['errMsg']) && $_GET['errMsg'] == "firstNameNULL") 
					{
					echo '<div class="form-group has-error" id="firstStatus">';
					echo '<label class="control-label" for="firstName">First name: </label>';
					echo '<input type="text" id="firstName" name="firstName" class="form-control"/>';
					echo '<div class="control-label" id="firstFeedback">First name cannot be blank!</div>';
					echo '</div>';
				} 
				else  // No error, previous data
				{
					if (isset($_SESSION['firstName']) && $_SESSION['firstName'] != '') 
					{
						echo '<div class="form-group" id="firstStatus">';
						echo '<label class="control-label" for="firstName">Please enter a first name </label>';
						echo '<input type="text" id="firstName" name="firstName" class="form-control" value="' . $_SESSION['firstName'] . '" />';
						echo '<div class="control-label" id="firstFeedback"></div>';
						echo '</div>';
					}
					else 
					{
						echo '<div class="form-group" id="firstStatus">';
						echo '<label class="control-label" for="firstName">First Name: </label>';
						echo '<input type="text" id="firstName" name="firstName" class="form-control"/>';
						echo '<div class="control-label" id="firstFeedback"></div>';
						echo '</div>';
					}
				}

				// <!--Last name error form-->
				if (isset($_GET['errMsg']) && $_GET['errMsg'] == "lastNameNULL") 
				{
					echo '<div class="form-group has-error">';
					echo '<label class="control-label" for="lastName">Last name: </label>';
					echo '<input type="text" id="lastName" name="lastName" class="form-control"/>';
					echo '<div id="lastFeedback">Last name cannot be blank!</div>';
					echo '</div>';
				} 
				else // No error, previous data
				{ 
					if (isset($_SESSION['lastName']) && $_SESSION['lastName'] != '') {
						echo '<div class="form-group" id="lastStatus">';
						echo '<label class="control-label" for="lastName">Please enter a last name </label>';
						echo '<input type="text" id="lastName" name="lastName" class="form-control" value="' . $_SESSION['lastName'] . '" />';
						echo '<div class="control-label" id="lastFeedback"></div>';
						echo '</div>';
					} 
					else 
					{
						echo '<div class="form-group" id="lastStatus">';
						echo '<label class="control-label" for="lastName">Last Name: </label>';
						echo '<input type="text" id="lastName" name="lastName" class="form-control"/>';
						echo '<div class="control-label" id="lastFeedback"></div>';
						echo '</div>';
					}
				}

				// <!--Email error form-->
				if (isset($_GET['errMsg']) && $_GET['errMsg'] == "emailAddressNULL") {
					echo '<div class="form-group has-error">';
					echo '<label class="control-label" for="emailAddress">Email Address: </label>';
					echo '<input type="text" id="emailAddress" name="emailAddress" class="form-control"/>';
					echo '<div id="emailFeedback">Email address cannot be blank!</div>';
					echo '</div>';
				} 
				else // No error, previous data
				{ 
					if (isset($_SESSION['emailAddress']) && $_SESSION['emailAddress'] != '') {
						echo '<div class="form-group" id="emailStatus">';
						echo '<label class="control-label" for="emailAddress">Please enter an email address </label>';
						echo '<input type="text" id="emailAddress" name="emailAddress" class="form-control" value="' . $_SESSION['emailAddress'] . '" />';
						echo '<div class="control-label" id="emailFeedback"></div>';
						echo '</div>';
					} 
					else 
					{
						echo '<div class="form-group" id="emailStatus">';
						echo '<label class="control-label" for="emailAddress">Email Address: </label>';
						echo '<input type="text" id="emailAddress" name="emailAddress" class="form-control"/>';
						echo '<div class="control-label" id="emailFeedback"></div>';
						echo '</div>';
					}
				}

				// <!--Phone error form-->
				if (isset($_GET['errMsg']) && $_GET['errMsg'] == "phoneNumberNULL") {
					echo '<div class="form-group has-error">';
					echo '<label class="control-label" for="phoneNumber">Phone number: </label>';
					echo '<input type="text" id="phoneNumber" name="phoneNumber" class="form-control"/>';
					echo '<div id="phoneFeedback">Phone number cannot be blank!</div>';
					echo '</div>';
					} 
					else // No error, previous data
					{ 
					if (isset($_SESSION['phoneNumber']) && $_SESSION['phoneNumber'] != '') {
						echo '<div class="form-group" id="phoneStatus">';
						echo '<label class="control-label" for="phoneNumber">Please enter a phone number </label>';
						echo '<input type="text" id="phoneNumber" name="phoneNumber" class="form-control" value="' . $_SESSION['phoneNumber'] . '" />';
						echo '<div class="control-label" id="phoneFeedback"></div>';
						echo '</div>';
					} 
					else 
					{
						echo '<div class="form-group" id="phoneStatus">';
						echo '<label class="control-label" for="phoneNumber">Phone Number: </label>';
						echo '<input type="text" id="phoneNumber" name="phoneNumber" class="form-control"/>';
						echo '<div class="control-label" id="phoneFeedback"></div>';
						echo '</div>';
					}
				}

				// <!--Username error form-->
				if (isset($_GET['errMsg']) && $_GET['errMsg'] == "usernameNULL") {
					echo '<div class="form-group has-error">';
					echo '<label class="control-label" for="username">Please enter a username: </label>';
					echo '<input type="text" id="username" name="username" class="form-control"/>';
					echo '<div id="userFeedback">Username name cannot be blank!</div>';
					echo '</div>';
					} 
					else // No error, previous data
					{ 
						if (isset($_SESSION['username']) && $_SESSION['username'] != '') 
						{
							echo '<div class="form-group" id="userStatus">';
							echo '<label class="control-label" for="username">Please enter an username </label>';
							echo '<input type="text" id="username" name="username" class="form-control" value="' . $_SESSION['username'] . '" />';
							echo '<div class="control-label" id="userFeedback"></div>';
							echo '</div>';
						} 
						else 
						{
							echo '<div class="form-group" id="userStatus">';
							echo '<label class="control-label" for="username">Username: </label>';
							echo '<input type="text" id="username" name="username" class="form-control"/>';
							echo '<div class="control-label" id="userFeedback"></div>';
							echo '</div>';
					}
				}

				// <!--Password error form-->
				if (isset($_GET['errMsg']) && $_GET['errMsg'] == "passwordNULL") 
				{
					echo '<div class="form-group has-error">';
					echo '<label class="control-label" for="password">Password: </label>';
					echo '<input type="password" id="password" name="password" class="form-control"/>';
					echo '<div id="passFeedback">Password cannot be blank!</div>';
					echo '</div>';
				} 
				else // No error, previous data
				{ 
					if (isset($_SESSION['password']) && $_SESSION['password'] != '') 
					{
						echo '<div class="form-group" id="passStatus">';
						echo '<label class="control-label" for="password">Please enter a password </label>';
						echo '<input type="password" id="password" name="password" class="form-control" value="' . $_SESSION['password'] . '" />';
						echo '<div class="control-label" id="passFeedback"></div>';
						echo '</div>';
					} 
					else 
					{
						echo '<div class="form-group" id="passStatus">';
						echo '<label class="control-label" for="password">Password: </label>';
						echo '<input type="password" id="password" name="password" class="form-control"/>';
						echo '<div class="control-label" id="passFeedback"></div>';
						echo '</div>';
					}
				}

				// <!--Comment error form-->
				if (isset($_GET['errMsg']) && $_GET['errMsg'] == "commentNULL") 
				{
					echo '<div class="form-group has-error">';
					echo '<label class="control-label" for="comment">Comment: </label>';
					echo '<input type="text" id="comment" name="comment" class="form-control"/>';
					echo '<div id="commFeedback">Comment cannot be blank!</div>';
					echo '</div>';
				} 
				else 
				{ // No error, previous data
					if (isset($_SESSION['comment']) && $_SESSION['comment'] != '') 
					{
						echo '<div class="form-group" id="commStatus">';
						echo '<label class="control-label" for="comment">Please enter a comment </label>';
						echo '<input type="text" id="comment" name="comment" class="form-control" value="' . $_SESSION['comment'] . '" />';
						echo '<div class="control-label" id="commFeedback"></div>';
						echo '</div>';
					} 
					else 
					{
						echo '<div class="form-group" id="commStatus">';
						echo '<label class="control-label" for="comment">Comment: </label>';
						echo '<input type="text" id="comment" name="comment" class="form-control"/>';
						echo '<div class="control-label" id="commFeedback"></div>';
						echo '</div>';
					}
				}

				//Submit button error check
				echo '<div class="form-group">';
				echo '<button type="submit" name="submit" value="submit" onclick="return checkErrors()">Submit</button>';
				echo '</div>Form will only submit if all fields are valid</div>';
				echo '</form>';
			} 
			else 
			{
				//SESSION info
				$errors = "";
				$_SESSION = array();
				$_COOKIE = array();
				$firstName = $_POST['firstName'];
				if ($firstName == NULL) 
					$errors .= "firstNameNull";
					else $_SESSION['firstName'] = $firstName;

				$lastName = $_POST['lastName'];
				if ($lastName == NULL) 
					$errors .= "lastNameNull";
					else $_SESSION['lastName'] = $lastName;

				$emailAddress = $_POST['emailAddress'];
				if ($emailAddress == NULL) 
					$errors .= "emailAddressNull";
					else $_SESSION['emailAddress'] = $emailAddress;

				$phoneNumber = $_POST['phoneNumber'];
				if ($phoneNumber == NULL) 
					$errors .= "phoneNumberNull";
					else $_SESSION['phoneNumber'] = $phoneNumber;

				$username = $_POST['username'];
				if ($username == NULL)
					$errors .= "usernameNull";
					else $_SESSION['username'] = $username;

				$password = $_POST['password'];
				if ($password == NULL) 
					$errors .= "passwordNull";
					else $_SESSION['password'] = $password;

				$comment = $_POST['comment'];
				if ($comment == NULL)
					$errors .= "commentNull";
					else $_SESSION['comment'] = $comment;

				if ($errors != NULL) {
					header("Location: contact.php?errMsg=$errors");
					exit();
				} 
				else 
				{
					echo '<div class="slides">';
					echo '<div class="slide" id="5">';
					echo '<div class="content second-content">';
					echo '<div class="container-fluid">';
					echo '<div class="col-md-6">';
					echo '<div class="left-content">';
					echo '<form method="post" id="mainform" action="">';
					//ODBCC string
					$dbUsername="webuser";
					$dbPassword="4M3SKLnv[)UQ]XX[";
					$host="localhost";
					$db="contact_data";
					$dblink=new mysqli($host,$dbUsername,$dbPassword,$db);
					$sql="Insert into `contact_info` (`first_name`, `last_name`, `email`, `phone`, `username`, `password`, `comment`) values ('$firstName', '$lastName', '$emailAddress', '$phoneNumber', '$username', '$password', '$comment')";
					$dblink->query($sql) or
						die("Something went wrong with: $sql".$dblink->error);
					echo '<h2>Your data was successfully saved.</h2>';
					
				}
			}
		?>
			</div>
           </div>
         </div>
       </div>
    </div>
	</div>
	
	<script src="../hw17/assets/js/add-content.js"></script>
	<script src="../hw17/assets/js/event-attributes.js"></script>
</body>