<?php

include("conn.php");


if($_SESSION['id']!='')
{
	unset($_SESSION['id']);
	header('location:index.php');
	exit();
}

?>