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
		include("../hw17/navigation.php");
	?>
	
        <?php 
			if(!isset($_GET['page']))
				$page="home";
			else	
				$page=$_GET['page'];
			switch($page){
					case"school":
					include("../hw17/school.php");
						break;
					case"dreamjob":
					include("../hw17/dreamjob.php");
						break;
					case"hobbies":
					include("../hw17/hobbies.php");
						break;
					case"contact":
					include("../hw17/contact.php");
						break;
					default:
					include("../hw17/home.php");
						break;
			};
		?>

	<script src="../hw17/assets/js/add-content.js"></script>
	<script src="../hw17/assets/js/event-attributes.js"></script>
</body>