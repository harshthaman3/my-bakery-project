<?php
session_start();
include('connection.php');
if(isset($_POST['email'])){
	// echo "<pre>";print_r($_POST);die;
	$dataTrue = true;
	if(!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i",$_POST['email']) || empty(trim($_POST['email']))){
		$dataTrue=false;
		echo "email is invalid or empty";
	}
	//if(!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/',$_POST['Password']) || empty(trim($_POST['Password']))){
		//$dataTrue=false;
		//echo "Password is invalid or empty";
	}
	if ($dataTrue){
		$selectquery=mysqli_query($conn,"SELECT 
		tb_id as id,
		tb_name as name
		FROM
		tb_registration
		WHERE 
		tb_email = '".$_POST['email']."'
		AND
		tb_password ='".$_POST['password']."'
		");	
		if(mysqli_num_rows($selectquery) ==0){
				echo 'Password is incorrect! Try again.';
			}else{
				$_SESSION['email'] = $_POST['email'];
				header('Location: ../dashboard.php');
			}
	}	
	else{
	echo 'No form submitted';
}
	


?>