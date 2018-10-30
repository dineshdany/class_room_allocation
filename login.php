
<!doctype HTML>
<html>
  <head>
  <title>LOGIN PORTAL </title>
 
   </head>
   <style>
   body{
	   background-image:url("r.png");
   }
   div{
	   padding-left:650px;
   }
   form{
	    border:3px solid navy ;
		height:280px;
		width:400px;
		background-color:mediumvioletred ;
		text-align:center;
}
h1{
	color:blue;
}
h2 {
	text-align:center;
	color:blue;
}
   </style>
   
<body>

<h1 style="text-align:center" >Classroom Allocation System</h1><br><br>
<marquee><?php include 'dclock.php'; ?></marquee>
<br><br>
<h2>Login Portal</h2>
 <h3 style="text-align:center">
 <?php
 session_start();
  $_SESSION['name']='dany';
  
 $script_name=$_SERVER['SCRIPT_NAME'];

$string1='dineshdany';
$string2='prime123';

if(isset($_POST['username'])&&isset($_POST['password'])&&isset($_POST['loginbutton'])){
	
	$text1=$_POST['username'];
	$text2=$_POST['password'];
	
	
if(!empty($text1)&&!empty($text2)&&!empty($_POST['loginbutton'])){
	if($string1==$text1&&$string2==$text2){
		@session_start();
		$_SESSION['name']=$text1;
		header('Location:lis.php');
		die();
		
	} else {
		echo 'login failed';
	}
}
else   {
	echo 'Fill Below Details';

}
}	

?>
</h3>
<div id='form'>

<form action="login.php" method="POST">
 <br><br><br>
 <br>
 <label style="color:blue">  USERNAME :</label>
 <input  type="text" name="username"  ><br>
 <br>
 
 <label style="color:blue"> PASSWORD :</label>
 <input type="password" name="password" ><br>
 
 <br>

 <input type="submit" name="loginbutton" value="login">
 
 </form>
 </div>
</body>
</html>
