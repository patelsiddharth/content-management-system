<?php
session_start();
if(!$_SESSION['admin_name'])
{
	header('location:login.php?error=You are not an administrator...');
}
?>
<html>
<head>
<title>ADMIN PANEL</title>
<link rel='stylesheet' href='main.css'/>
</head>
<body>
	<form action='' method='post'>
	<div style="background-color:#ccddee; padding:7px;" align="center">
	<h3>SEARCH RECORD</h3>
	WELCOME : <font size='4' color='red'><?php echo $_SESSION['admin_name'];?></font>
	</div><br>
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
	<?php
		if(isset($_POST['fd']))
		{
			$abc=$_REQUEST['select'];
			echo "<script>window.open('$abc.php','_self');</script>";
		}
	?>
	</form>
	<footer><a href='logout2.php'>Log out</a></footer>
</body>
</html>