<?php
	include("../hw19/functions.php");
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
        <link rel="stylesheet" href="../hw19/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="../hw19/assets/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="../hw19/assets/css/fontAwesome.css">
        <link rel="stylesheet" href="../hw19/assets/css/light-box.css">
        <link rel="stylesheet" href="../hw19/assets/css/templatemo-main.css">
</head>

<body>		
	<?php
		include("../hw19/navigation.php");
	?>
	
        <?php 
			if(!isset($_GET['page']))
				$page="home";
			else	
				$page=$_GET['page'];
			switch($page){
					case"school":
					include("../hw19/school.php");
						break;
					case"dreamjob":
					include("../hw19/dreamjob.php");
						break;
					case"hobbies":
					include("../hw19/hobbies.php");
						break;
					case"contact":
					include("../hw19/contact.php");
						break;
					case"results";
					include("../hw19/results.php");
						break;
					default:
					include("../hw19/home.php");
						break;
			};
		?>

	<script src="../hw19/assets/js/add-content.js"></script>
	<script src="../hw19/assets/js/event-attributes.js"></script>
</body>