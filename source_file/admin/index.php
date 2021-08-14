<?php
if(filter_has_var(INPUT_POST, 'submit')){
	$name = $_POST['name'];
	$password = $_POST['pass'];
	$email = $_POST['email'];
	$n = "noushedul";
	$p = "12345";
	$e = "noushedakib@gmail.com";
	if($name == $n && $password == $p && $email == $e){
		header('Location: welcome.php?id='.'Data Send');
	}else{
		echo "<span style='color: red;'>"."Fail"."</span>";
	}
	
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		form{
			background: #ccc;
		}
	</style>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		<fieldset>
		<label for="">Name :</label>
		<div>
			<input type="text" name="name">
		</div>
		<label for="">Password :</label>
		<div>
			<input type="text" name="pass">
		</div>
		<label for="">Email :</label>
		<div>
			<input type="text" name="email">
		</div>
		<input type="submit" name="submit">
		</fieldset>
	</form>
</body>
</html>