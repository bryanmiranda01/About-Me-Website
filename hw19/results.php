<script src="assets/js/jquery-3.5.1.js"></script>
<?php
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
	echo '<tbody id="results">';
	
	echo '</tbody>';
	echo '</table>';
	echo '</section>';

	echo '</h2>';					
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
	echo '</div>';
?>
<script>
	function refresh_data(){
		$.ajax({
			type: 'post',
			url: 'https://ec2-3-15-137-151.us-east-2.compute.amazonaws.com/hw19/query_contacts.php',
			success: function(data) {
				$('#results').html(data);
			}
		});
	}
	setInterval(function() {refresh_data(); }, 500);
</script>