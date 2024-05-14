<?php
	$dblink=db_connect("contact_data");
	$sql="Select * from `contact_info`";
	$result=$dblink->query($sql) or
		die("Something went wrong with $sql ".$dblink->error);

	echo '<div class="slides">';
	echo '<div class="slide" id="6">';
	echo '<div class="content second-content" style="background-color: white">';
	echo '<div class="container-fluid" >';
	echo '<div class="col-md-6">';
	echo '<div class="left-content">';
	echo '<h2 style="color:white;"';
		
	echo '<section id="home">';
	echo '<table class="table table-striped" style="table-layout:auto">';
	echo '<thead>';
	echo '<tr>';
	echo '<th>First Name</th>';
	echo '<th>Last Name</th>';
	echo '<th>Email</th>';
	echo '<th>Phone</th>';
	echo '<th>Comments</th>';
	echo '</tr>';
	echo '</thead';
	echo '<tbody>';
	
	while ($data=$result->fetch_array(MYSQLI_ASSOC))
	{
		echo '<tr>';
		echo '<td>'.$data['first_name'].'</td>';
		echo '<td>'.$data['last_name'].'</td>';
		echo '<td>'.$data['email'].'</td>';
		echo '<td>'.$data['phone'].'</td>';
		echo '<td>'.$data['comment'].'</td>';		
		echo '</tr>';
	}
	echo '</tbody>';
	echo '</table>';
	echo '</section>';

	echo '</h2>';					
    echo '</div>';
    echo ' </div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
	echo '</div>';
	
?>