<?php

	include('includes/session.php');
	include('../config/database.php');

	foreach ($_POST as $key => $value)
	{
		$$key = trim($value);	
	}

	if (empty($user_id))
	{
		$_SESSION['errors'] = "Please select user";
	}
	
	if (count($_SESSION['errors']) == 0)
	{
		$_SESSION['user'] = $user_id;
		$_SESSION['data'] = $_POST;
	}

	header('location:display_record.php');
?>