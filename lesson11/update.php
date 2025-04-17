<?php 

include_once('config.php');

	if(isset($_POST['update']))
	{

        $username = $_POST['username'];
	    $name = $_POST['name'];
		$surname = $_POST['surname'];
		
		$email = $_POST['email'];


			$sql = "INSERT INTO users(username,name,surname,password,email) VALUES (:username, :name, :surname, :password, :email)";

			$insertSql = $conn->prepare($sql);

			$insertSql->bindParam(':username', $username);
			$insertSql->bindParam(':name', $name);
			$insertSql->bindParam(':surname', $surname);
			
			$insertSql->bindParam(':email', $email);

			$insertSql->execute();

			header("Location:dashboard.php");

	}


	
?>


