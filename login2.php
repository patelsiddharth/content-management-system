<?php
session_start();
?>
<html>
<head>
<title>Login for User 2</title>
<link rel='stylesheet' href='login1.css'/>
</head>
<body>
<div id="d">
<h2>WELCOME TO LOGIN PANEL FOR USER 2</h2>
</div>
<br><br>
<form action='login2.php' method='post'>
	<div align='center'>
	<fieldset id='fs' align='center'>
		<legend> <b><i>ADMIN LOGIN</i></b> </legend>
		<p>
		<label for='un'> User Name </label><input type='text' name='admin_name' id='un' align='center'>
		</p>
		<p>
		<label for='p'> Password </label><input type='password' name='pass' id='p'>
		</p> 	
		<p>
		<label><input type='submit' name='submit' value='Login'></label>
		</p>	
	</fieldset>
	</div>
</form>
<form action='login2.php' method='post'>
	<div align='center'>
	<fieldset id='fs' align='center'>
		<legend> <b><i>ADMIN SIGN UP</i> </b></legend>
		<p>
		<label for='un'> User Name </label><input type='text' name='name' id='un' align='center' required>
		</p>
		<p>
		<label for='p'> Password </label><input type='password' name='pass' id='p' required>
		</p> 	
		<p>
		<label for='p'> Confirm Password </label><input type='password' name='pass1' id='p' required>
		</p> 
		<p style="padding:15px;">
		<label ><input type='submit' name='submit1' value='Sign Up' align='center'></label>
		</p>
	</fieldset>
	</div>
</form>
<footer><a href="login1.php">LOGIN FOR USER 1</a></footer>
<footer><a href="main.php">MAIN PAGE</a></footer>
</body>
</html>
<?php
include('inc/db.php');
if(isset($_POST['submit']))
{
	$an = $_SESSION['admin_name'] = $_POST['admin_name'];
	$ap = $_POST['pass'];
	$query = "select * from login2 where username='$an' AND password='$ap'"; 
    $run = mysql_query($query);
	if(@mysql_num_rows($run) == 1)
	{
		echo "<script>window.open('search.php?logged=YOU ARE LOGGED IN ','_self')</script>";
	}	
	else
	{
		echo "<script>alert('Username or password is incorrect')</script>";
	}
}	
?>
<?php
include('inc/db.php');
if(isset($_POST['submit1']))
{
	$un = $_POST['name'];
	$p = $_POST['pass'];
	$cp = $_POST['pass1'];
	if(empty($un) || empty($p) || empty($cp))
	{
		echo "<script>
			alert('Please fill all the details.');
			window.open('login2.php','_self');
			  </script>";
	}
	else
	{
		$q="select * from login2 where username = '$un'";
		$run = mysql_query($q);
		if($row = mysql_fetch_array($run))
			{
				echo "<script>
				alert('Username Already Exist. Please Re-Enter.');
				window.open('login2.php','_self');
				</script>";
				exit();
			}	
	}
	if($p == $cp)
	{
		$query = "insert into login2 (username,password) values ('$un','$p')";
		if(@mysql_query($query))
		{
			echo "<script>alert('New user signed up');
			window.open('login2.php?signup=New user has signed up....','_self');</script>";
		}
	}
	else
	{
		echo "<script>alert('password does not match.Try again')</script>";
	}
}
?>