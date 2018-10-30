<?php
@session_start();
unset($_SESSION['name']);
echo 'logged out';
header('Refresh:2,url="login.php"');
?>