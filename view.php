<html>
<head>
<title>ADMIN PANEL</title>
<link rel='stylesheet' href='main.css'/>
</head>
<body>
<?php
include('inc/db.php');
?>
	<div style="background-color:#ccddee; padding:7px;" align="center"><h3>VIEW RECORD</h3></div><br>
	<table align="center" width="1000" border="2px" id="t">
	<tr height="30px">
		<th> NAME </th>
		<th> GENDER </th>
		<th> ADDRESS</th>
		<th> CONTACT</th>
		<th> LOCATION </th>
		<th> SKILL </th>
		<th> CATEGORY </th>
		<th> DELETE </th>
	</tr>
	<tr>
	<?php
	$query = "select * from information";
	$run = @mysql_query($query);
	while($row = @mysql_fetch_array($run))
	{
		$n = $row['name'];
		$g = $row['gender'];
		$a = $row['address'];
		$co = $row['contact'];
		$l = $row['location'];
		$s = $row['skill'];
		$c = $row['category'];
	?>
	<td align="center"><?php echo $n;?></td>
	<td align="center"><?php echo $g;?></td>
	<td align="center"><?php echo $a;?></td>
	<td align="center"><?php echo $co;?></td>
	<td align="center"><?php echo $l;?></td>
	<td align="center"><?php echo $s;?></td>
	<td align="center"><?php echo $c;?></td>
	<td align="center"><a href="del.php?del=<?php echo $row['id'];?>">delete</a></td>
	</tr>
	<?php } ?>
</table>
<footer><a href="insert_data.php"> GO BACK </a></footer>
</body>
</html>	