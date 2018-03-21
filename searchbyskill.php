<html>
<head>
<title>ADMIN PANEL</title>
<link rel='stylesheet' href='main.css'/>
</head>
<body>
	
	<form action='' method='post'>
	<div style="background-color:#ccddee; padding:7px;" align="center"><h3>SEARCH RECORD</h3></div><br>
	<p align="center">
	<label> SEARCH BY :</label>&nbsp;
	<select name="select">
		<optgroup label="select category">
			<option value="searchbylocation">Location</option>
			<option value="searchbyskill">Skill</option>
			<option value="searchbycategory">Category</option>
			<option value="searchbygender">Gender</option>
		</optgroup>
	</select>
	<input type="submit" name="fd" value="Search"/><br><br>
	</p>
	<p align="center">
	<label> ENTER SKILL :</label>&nbsp;
	<input type="text" name="valuetosearch" placeholder=" value to search">
	<input type="submit" name="find" value="Search"/><br><br>
	</p>
	<table align="center" width="1000" border="2px" id="t">
	<tr height="30px">
		<th> ID </th>
		<th> NAME </th>
		<th> GENDER </th>
		<th> ADDRESS</th>
		<th> CONTACT</th>
		<th> LOCATION </th>
		<th> SKILL </th>
		<th> CATEGORY </th>
	</tr>
	
	<?php
	if(isset($_POST['fd']))
		{
			$abc=$_REQUEST['select'];
			echo "<script>window.open('$abc.php','_self');</script>";
		}
	include('inc/db.php');
	
	if(isset($_POST['find']))
	{
	$value = $_POST['valuetosearch'];
	$sql = "select * from information where skill='$value'";
	$run = @mysql_query($sql);
	if(@mysql_num_rows($run) > 0)
	{
		while($row = @mysql_fetch_array($run))
		{
	?>
	<tr>
	<td align="center"><?php echo $row['id'];?></td>
	<td align="center"><?php echo $row['name'];?></td>
	<td align="center"><?php echo $row['gender'];?></td>
	<td align="center"><?php echo $row['address'];?></td>
	<td align="center"><?php echo $row['contact'];?></td>
	<td align="center"><?php echo $row['location'];?></td>
	<td align="center"><?php echo $row['skill'];?></td>
	<td align="center"><?php echo $row['category'];?></td>
	</tr>
	<?php }
	}
	else
	{
		echo "undefined skill";
		
	}
	@mysql_free_result($run);
	}  ?>
</table>
</form>
<footer><a href="search.php"> GO BACK </a></footer>
</body>
</html>




