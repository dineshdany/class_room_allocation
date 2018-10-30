<!doctype HTML>
<html>
<head>
<title>REMOVE</title>
<h1 style="text-align:center">Remove Record</h1>
</head>
<style>
div {
	padding-left:550px;
	padding-top:130px;
}
form {
	text-align:center;
	border:3px solid blue;
	height:220px;
	width:430px;
	background-color:lightblue;
}
body {
	background-image:url("b2.jpg");
}
h1 {
	color:red;
}
</style>


<body>
<div>
<form action="db3.php" method="GET">
<h2 style="text-align:center">
<?php
$connection_error="could not connect";
$mysql_host="localhost";
$mysql_user="root";
$mysql_pass="";
$mysql_db="project";

if(!mysql_connect($mysql_host,$mysql_user,$mysql_pass)||!mysql_select_db($mysql_db)) {
	die($connection_error);
}
echo 'Enter the number :';

?>
<input id='num' type="int" name="text" placeholder="number"><br><br>
<?php  echo 'Enter branch :'; ?>
<input type="text" name="branch" placeholder="branch"><br><br>
<input type="Submit" value="Submit">
<input type="submit" name="rback" value="BACK">
<?php if(isset($_GET['rback'])&&!empty($_GET['rback'])){
	header('location:mainmenu.php');
}
?>
</h2>
<?php
if(isset($_GET['text'])&& isset($_GET['branch']) ){
	if(!empty($_GET['text']) && !empty($_GET['branch']))
	{
$text = $_GET['text'];
$branch = $_GET['branch'];
$query = "DELETE FROM `allocate` WHERE `text`='$text' AND `branch`='$branch'";
if($query_run = mysql_query($query)){
echo 'Deleted successfully\n';
}else{
echo mysql_error();
}
}
 else{
	echo  'Fill the details';
 }
}
?> 
</form>
</div>
</body>
</html>
