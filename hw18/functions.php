<?php

function db_connect($db)
{
	$dbUsername="webuser";
	$dbPassword="4M3SKLnv[)UQ]XX[";
	$host="localhost";
	$dblink=new mysqli($host,$dbUsername,$dbPassword,$db);
	return $dblink;
}

function redirect ($uri)
{	?>
	<script type="text/javascript">
	document.location.href="<?php echo $uri; ?>";
	</script>
<?php die;
}
?>