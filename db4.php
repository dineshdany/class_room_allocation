<?php
$connection_error="could not connect";
$mysql_host="localhost";
$mysql_user="root";
$mysql_pass="";
$mysql_db="project";

if(!mysql_connect($mysql_host,$mysql_user,$mysql_pass)||!mysql_select_db($mysql_db)) {
	die($connection_error);
}
echo 'Enter the number :'.'<br>';

?>
<form action="db3.php" method="GET">
<input id='num' type="int" name="text" placeholder="number"><br>
<?php  echo 'Enter branch :'; ?><br>
<input type="text" name="branch" placeholder="branch"><br>
<input type="Submit" value="Submit">
<input type="submit" name="rback" value="BACK">
<?php if(isset($_GET['rback'])&&!empty($_GET['rback'])){
	header('location:mainmenu.php');
}
?>
</form>
<?php
if(isset($_GET['text'])&& isset($_GET['branch']) ){
	if(!empty($_GET['text']) && !empty($_GET['branch']))
	{
$text = $_GET['text'];
$branch = $_GET['branch'];
$query = "DELETE FROM `allocate` WHERE 1 ";
if($query_run = mysql_query($query)){
echo 'Deleted successfully';
}else{
echo mysql_error();
}
}
 else{
	echo  'Fill the details';
 }
}
?> 

