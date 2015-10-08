<?php
session_start();
if(isset($_SESSION['bizarrechat_id']))
{
    
    echo 1;
}
else
{
    echo 0;
}
?>