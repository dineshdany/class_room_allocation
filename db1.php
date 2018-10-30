

<DOCTYPE! html>
<html>
<head>
<title> CLASS ALLOCATION</title>
</head>
<style>
h2 {
	color:yellow;
	background-color:black;
	font-size:200%;
	text-align:center;
}

</style>

<body style="background-color:#119A99";>
<h1 style="text-align:center">
<br>
 </h1>  
<h2>
<?php
$text=0;
$branch=0;
$capacity=0;
 
if (isset($_POST['text'])&& isset($_POST['branch'])&&isset($_POST['capacity']))
{
	if(!empty($_POST['text'])&&!empty($_POST['branch'])&&!empty($_POST['capacity'])){
	$text=$_POST['text'];
	$branch=$_POST['branch'];
	$capacity=$_POST['capacity'];
	if(isset($_POST['save'])&&!empty($_POST['save']))
	{
$con = mysqli_connect('localhost', 'root' , '', 'project');
$query = "SELECT * FROM `allocate` WHERE `text`='".$text."'";// AND `branch`='".$branch"' AND `capacity`='".$capacity."'";
//mysql_select_db('project');
$query_run = mysqli_query($con,$query);
//echo mysql_error();
if(mysqli_num_rows($query_run)!=NULL){
echo '!!..DATA Already Exists..!!';
header("refresh:2,url='pro.php'");
die();
}
$query="INSERT INTO `allocate`  (`text`, `branch`,`capacity`) VALUES ('".$text."', '".$branch."' ,'".$capacity."')";
$con1 = mysqli_query($con,$query);
echo "saved";
 
  header("Refresh:0;url='mainmenu.php'");
 die();
}
}
 else
 {
	 echo "Enter All The Details";
	 header("refresh:2,url='pro.php'");
	  }
} 
?>
</h2>
</body>
</html>
<?php
@session_start();
if(isset($_POST['back'])) {
	
	header('location:mainmenu.php');
}
?>
