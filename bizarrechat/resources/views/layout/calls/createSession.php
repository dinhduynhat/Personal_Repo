<?php
session_start();
$_SESSION['bizarrechat_id'] = $_GET['data'];
print_r($_SESSION['bizarrechat_id']);
#echo "<script>localStorage.setItem('sup_idds', '".$_GET['data']."');</script>";    
?>