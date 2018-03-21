<?php
include('inc/db.php');
$delete = $_GET['del'];
$query="delete from information where id = '$delete'";
if(@mysql_query($query))
{
	echo "<script>
			alert('Record Deleted');
			window.open('view.php','_self');
		  </script>";
}

?>