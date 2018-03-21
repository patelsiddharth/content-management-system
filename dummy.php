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
<?php
include('inc/db.php');
?>
	<div style="background-color:#ccddee; padding:7px;" align="center"><h3> ENTER INFORMATION </h3>
	WELCOME : <font size='4' color='red'><?php echo $_SESSION['admin_name'];?></font>
	</div><br><br>
	<form name='form1' action='dummy.php' method='post' onsubmit='required()'>
		<div align='center'>
			<fieldset class='fs'>
					<legend>INFORMATION </legend>
					<p>
					<label for='n'>NAME : </label><input type='text' name='name' id='n' class='pi' align='center' required/>
					</p>
					<p>
					<label for='c'>GENDER : </label><input type='text' name='gender' id='gender' class='pi' align='center'/>
					</p>
					<p>
					<label for='add'>ADDRESS : </label><input type='text' name='add' id='add' class='pi' align='center'required/>
					</p>
					<p>
					<label for='c'>CONTACT DETAILS : </label><input type='text' name='cd' id='c' class='pi' align='center' required/>
					</p>
					<p>
					<label for='loc'>LOCATION : </label><input type='text' name='loc' id='loc' class='pi' align='center'/>
					</p>
					<p>
					<label for='skill'>	SKILL : </label><input type='text' name='skill' id='skill' class='pi' align='center'/>
					</p>
					<p>
					<label for='cate'>CATEGORY : </label><input type='text' name='cate' id='cate' class='pi' align='center'/>
					</p>
					<p>
					<label><input type='submit' value='Submit' name='login' /></label>
					</p>
			</fieldset>
		</div>
	</form>
	<br><br>
	<div style="background-color:#ccddee; padding:7px;" align="center"><h3>VIEW RECORD</h3></div><br>
	<h2 align="center"><a href="view.php">view record</a></h2>	
<?php
	include('inc/db.php');
	if(isset($_POST['login']))
	{
		$name = $_POST['name'];
		$gender = $_POST['gender'];
		$address = $_POST['add'];
		$contact = $_POST['cd'];
		$location = $_POST['loc'];
		$skill = $_POST['skill'];
		$category = $_POST['cate'];
		if(empty($name) || empty($gender) || empty($address) || empty($contact) || empty($location) || empty($skill) || empty($category))
		{
			echo "<script>
				  alert('Please fill all the details.');
				  window.open('dummy.php','_self');
				  </script>";
		}
		else
		{
			$que = "select * from information where name='$name' and address='$address' and contact='$contact'";
			$run = mysql_query($que);
			if($row = mysql_fetch_array($run))
			{
				echo "<script>
				alert('Username Already Exist. Please Re-Enter.');
				window.open('dummy.php','_self');
				</script>";
				exit();
			}		
		}
		$query = "insert into information (name,gender,address,contact,location,skill,category) values ('$name','$gender','$address','$contact','$location','$skill','$category')";
		if(@mysql_query($query))
		{	?>
			<script type="text/javascript">							
			function funky()
			{
					alert ("New information entered");
			}
			funky();	
			</script>
		<?php }
	}
?>
<footer><a href='logout1.php'>Log out</a></footer>
</body>
</html>


