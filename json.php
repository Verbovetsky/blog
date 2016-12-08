<?php 
    require_once("database.php");
    require_once("models/articles.php");
	$link = db_connect();

	include ("json.html");


if (isset($_POST['form'])) {
	print_r ($_POST);
	print '<pre>';
$one = mysql_real_escape_string($_POST['form']);
//$one = json_encode($one, JSON_UNESCAPED_UNICODE);
$query = "INSERT INTO articles (content) VALUES ('$one')";
mysqli_query($link, $query);
print ($query);
} 
?>