<?php
if(isset($_GET['submit']) ){
	
	
		$con = mysqli_connect('localhost', 'root' , '', 'stock');
        $id = $_GET['id'];
        $query = "DELETE FROM `stocks` WHERE `id`='$id'";
		if($query_run = mysqli_query($query)){
          echo 'Deleted successfully\n';
}
	
}
?>