<?php
	include("../hw20/functions.php");
?>

<head>
<meta charset="utf-8">
<title>Welcome to Bryan Miranda's homepage</title>
	<link rel="stylesheet" type="text/css" 
        href="../css/styles.css">
	
	<!--Bootstrap template-->
		<meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--    <link rel="apple-touch-icon" href="apple-touch-icon.png"> -->
        <link rel="stylesheet" href="../hw20/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="../hw20/assets/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="../hw20/assets/css/fontAwesome.css">
        <link rel="stylesheet" href="../hw20/assets/css/light-box.css">
        <link rel="stylesheet" href="../hw20/assets/css/templatemo-main.css">
</head>

<body>		
	<?php
		include("../hw20/navigation.php");
	?>
	
        <?php 
			if(!isset($_GET['page']))
				$page="home";
			else	
				$page=$_GET['page'];
			switch($page){
					case"login":
					include("../hw20/login.php");
						break;
					case"register":
					include("../hw20/register.php");
						break;
					
					case"school":
					include("../hw20/school.php");
						break;
					case"dreamjob":
					include("../hw20/dreamjob.php");
						break;
					case"hobbies":
					include("../hw20/hobbies.php");
						break;
					case"contact":
					include("../hw20/contact.php");
						break;
					case"results";
					include("../hw20/results.php");
						break;
					default:
					include("../hw20/home.php");
						break;
			};
		?>

	<script src="../hw20/assets/js/add-content.js"></script>
	<script src="../hw20/assets/js/event-attributes.js"></script>
</body>