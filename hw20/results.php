<script src="assets/js/jquery-3.5.1.js"></script>
<?php
if(isset($_REQUEST['sid']) && $_REQUEST['sid']!='')
{
	$sid=addslashes($_REQUEST['sid']);
	$dblink=db_connect("user_data");
	$sql="Select `auto_id` from `accounts` where `session_id`='$sid'";
	$result=$dblink->query($sql) or
		die("<p>Something went wrong with: $sql<br>".$dblink->error);
	if($result->num_rows<=0)
		redirect("index.php?page=login$errMsg=InvalidSid");
	
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
}
else
	redirect("index.php?page=login&errMsg=NullSid");
?>
<script>
	function refresh_data(){
		$.ajax({
			type: 'post',
			url: 'https://ec2-3-15-137-151.us-east-2.compute.amazonaws.com/hw20/query_contacts.php',
			success: function(data) {
				$('#results').html(data);
			}
		});
	}
	setInterval(function() {refresh_data(); }, 500);
</script>