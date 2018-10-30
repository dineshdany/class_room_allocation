<!DOCTYPE html>
<html>
<head>
<title> DETAILS </title>
<style>
body {
	background-color:red;
	background-image:url("b6.jpg");
}
#table{
   margin-top:30px;
   }
   h2{
	   text-align:center;
   }
   
</style>
</head>
<body>
<h1 style="text-align:center"> Details </h1>
<h2>
<div id='table'><br>
<table style="width:99.9%">
<tr>
<th>Class number</th>
<th>Branch</th>
<th>Capacity</th>
</tr>
<h2>
<?php
$connection_error="could not connect";
$mysql_host="localhost";
$mysql_user="root";
$mysql_pass="";
$mysql_db="project";

if(!mysql_connect($mysql_host,$mysql_user,$mysql_pass)||!mysql_select_db($mysql_db)) {
	die($connection_error);
}
$query = "SELECT * FROM `allocate` WHERE 1";
$query_run = mysql_query($query);
if(mysql_num_rows($query_run)==NULL){
echo 'No results found.';
}else{
while($query_row = mysql_fetch_assoc($query_run)){
$text = $query_row['text'];
$branch = $query_row['branch'];
$capacity = $query_row['capacity'];
echo '<tr>';
echo "<td><br>$text</td>";
echo "<td><br>$branch</td>";
echo "<td><br>$capacity</td>";
echo '</tr>';
}
}
?>
</h2>
</table>
<h1 style="text-align:center">

<form action="" method="POST">
<input type="submit" name="dback" value="BACK">
</form>
</h2>
</div>
</h2>
</body>
</html>
<?php

if(isset($_POST['dback'])&&!empty($_POST['dback'])) {
	
	header('location:mainmenu.php');
}
