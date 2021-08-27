<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sign in</title>
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Anton&family=Otomanopee+One&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/94e307683f.js" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<style type="text/css">
		body{
			text-align: center;
			margin: 10% 0%;
		}
	</style>
</head>
<body>
	<form action="validation.php" method="POST" onsubmit="return validate()" name="log">
		<p>Username <input type="textbox" id="username" name="username"/></br></p>
		<p>Password <input type="password" id="password" name="password"/></br></p>
		<input type="submit" name="submit"/>
	</form>
	<div>
		<p><a role="button" class="btn btn-primary" href="Registration_form.html" style="margin-top: 1%;">Sign-up for free</a></p>
	</div>
</body>
</html>