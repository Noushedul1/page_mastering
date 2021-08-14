<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php include 'inc/header.php'; ?>
<?php 
if(isset($pages)){
	if($pages == 'blog'){
		include 'pages/blog_content.php';
	}
	else if($pages == 'service'){
		include 'pages/service_content.php';
	}else if($pages == 'about'){
		include 'pages/about_content.php';
	}
}else{
	include 'pages/body_content.php';
}
?>
<?php include 'inc/footer.php'; ?>
</body>
</html>
