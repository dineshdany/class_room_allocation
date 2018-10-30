<?php
session_start();
if(!isset($_SESSION['name']))
{
	echo "Login to access";
	die();
}	
?>
<!doctype HTML>
<html>
  <head>
  <title>MAINMENU</title>
 
   </head>
   <style>
   div{
	   padding-left:520px;
   }
   form {
	   border:3px solid grey;
	   height:320px;
	   width:480px;
	   //text-align:center;
	   background-color:dodgerblue;
   }
   body{
	    background-image:url("b1.jpg");
   }
   h2 {
	   color:blue;
   }
   </style>
   
<body>

<h2 style="text-align:center">    MAIN MENU  <br><br>
<h2><br>
<br>

<div>
<form action="" method="POST"><br>
<label> 1.</label>
<input type="submit"  name="allocate" value="Allocate class"><br> 
<br>
<label>2.</label>
<input type="submit" name="details" value="View class details"><br>
<br>
<label>3. </label>
<input type="submit" name="clear" value="Clear entire details"><br>
<br>
<label>4. </label>
<input type="submit" name="remove" value="Remove"><br>
<br>
<label>5. </label>
<input type="submit" name="logout" value="Logout"><br>
</form>
</div>
</body>
</html>

<?php
  @session_start();
  $connection_error="could not connect";
$mysql_host="localhost";
$mysql_user="root";
$mysql_pass="";
$mysql_db="project";

if(!mysql_connect($mysql_host,$mysql_user,$mysql_pass)||!mysql_select_db($mysql_db)) {
	die($connection_error);
}

  
   if(isset($_POST['allocate'])){
	   
	  header('location:pro.php');
   } else if(isset($_POST['details'])){
	   header('location:db2.php');
   } else if(isset($_POST['remove'])){
	   header('location:db3.php');
   } else if(isset($_POST['clear'])){
	  $query = "DELETE FROM `allocate` WHERE 1 ";
if($query_run = mysql_query($query)){
echo 'Deleted successfully\n';
}else{
echo mysql_error();
}
   }
   else if(isset($_POST['logout'])) {
	   echo "logged out";
	       
	   header('Refresh:2,url="login.php"');
   }

?>






