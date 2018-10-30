
<!doctype HTML>
<html>
  <head>
  <title>REMOVE</title>
 
   </head>
   <style>
   div {
	   padding-left:550px;
   }
   form {
	      border:4px solid green;
		  height:250px;
		  width:400px;
		  background-color:gold;
		  text-align:center;
   }
h1{
	color:blue;
}
  tr {
	  margin-top:0px;
  }
   </style>
   
<body style="background-color:silver ">

<h1 style="text-align:center" >Delete record</h1><br><br>
<br><br>
<div>
<form action="db3.php" method="POST"><br><br>
<label>Enter Class No. :</label>
<input type="text" name="cnumber" ><br><br>
<input type="submit" name="remove" value="REMOVE">
<input type="submit" name="back" value="BACK">
</form>
</div>
</body>
</html>
<?php
session_start();
  $_SESSION['name']='dany';
  
if(isset($_POST['back'])){
	
	header('location:mainmenu.php');
	unset($_SESSION['name']);
}