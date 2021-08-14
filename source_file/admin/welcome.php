<?php
echo "Welcome Noushedul Islam to our admin panel";
?>
<?php
if(isset($_GET['id'])){
	echo "<h1 style='color: green;'>".$_GET['id']."</h1>";
}
?>