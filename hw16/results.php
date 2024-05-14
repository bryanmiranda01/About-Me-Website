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
	
	<script src="../hw17/assets/js/add-content.js"></script>
	<script src="../hw17/assets/js/event-attributes.js"></script>
</body>