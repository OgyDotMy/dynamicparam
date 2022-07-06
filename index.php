<?php 
    $getlink=$_GET['pages'];
    $pathname="pages/".$getlink.".php";

    include "library/content.php";
    include $pathname;
?>
