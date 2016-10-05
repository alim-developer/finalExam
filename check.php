<?php
	
	if (isset($_POST['submit'])) {
		session_start();
		$name = $_POST["name"];
		$surname = $_POST["surname"];
		$phone = $_POST["phone"];
		$b = $_POST["num"];
		include "config.php";
		$data = new database;
		for($i=0; $i<=$b; $i++){
			

			$company = $_POST["company".$i];
			
			if(!empty($name) && !empty($surname) && !empty($phone) && !empty($company)){

				$data -> createColumn("company", "company".$i);
				$a = $data -> insert("company", "name,surname,phone,company".$i."", "'$name', '$surname', '$phone', '$company'");
				header("Location: index.php");
				$_SESSION['success'] = "Müraciətiniz qeydə alındı";
			}else{
				header('Location: index.php');
				$_SESSION['error'] = "Bütün xanaları doldurun";
			}
		}
	}else{
		header('Location: index.php');
	}

?>