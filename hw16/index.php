<head>
<meta charset="utf-8">
<title>Welcome to Bryan Miranda's homepage</title>
	<link rel="stylesheet" type="text/css" 
        href="../css/styles.css">
	
	<!--Bootstrap template-->
		<meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--    <link rel="apple-touch-icon" href="apple-touch-icon.png"> -->
        <link rel="stylesheet" href="../hw16/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="../hw16/assets/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="../hw16/assets/css/fontAwesome.css">
        <link rel="stylesheet" href="../hw16/assets/css/light-box.css">
        <link rel="stylesheet" href="../hw16/assets/css/templatemo-main.css">
</head>

<body>		
	<?php
		include("navigation.php");
	?>
	
        <?php 
			if(!isset($_GET['page']))
				$page="home";
			else	
				$page=$_GET['page'];
			switch($page){
					case"school":
					include("school.php");
						break;
					case"dreamjob":
					include("dreamjob.php");
						break;
					case"hobbies":
					include("hobbies.php");
						break;
					case"contact":
					include("contact.php");
						break;
					default:
					include("home.php");
						break;
			};
		?>

	<script src="../hw16/assets/js/add-content.js"></script>
	<script src="../hw16/assets/js/event-attributes.js"></script>
</body>