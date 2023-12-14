<?php
	$connection = mysqli_connect("localhost", "root", "", 'Olympia_DB');
	
	$username = filter_input(INPUT_POST, 'username');
	$password = filter_input(INPUT_POST, 'password');
	
	if (!$connection){
		exit("<br><p class='error_text'>An error occured ". mysqli_connect_errno() . "<p/>");
	}
	else{
		$sql_if = "SELECT COUNT(`login`) FROM `account` WHERE `account`.login='$username'";
		if(empty($username) || empty($password)){
			echo "<br>Connection failed";
		}
		else if ($sql_if){
			echo "<br>login exists";
		}
		else{
			if(mysqli_connect_error()){
				die('Connect Error('. mysqli_connect_errno() .')'
					.mysqli_connect_error());
			}
			else{
				$sql = "INSERT INTO account (id_user, login, password) values (NULL, '$username', '$password')";
				if($connection->query($sql)){
					echo "New record is inserted sucessfully";
				}
				else{
					echo "Error: ". $sql ."<br>". $connection->error;
				}
			$connection->close();	
			}
//			echo "<br><p style='color: green;'>Connection successful<p/>";
		}
		$sql_abonement = "INSERT INTO abonement_offer (id_abonement, id_user) VALUES (1, 10)";
		if (isset($_POST["button_offer_dog"])) {
			query("INSERT INTO abonement_offer (id_abonement, id_user) VALUES (1, 10)");
		}
		if (isset($_POST["button_offer_wolf"])) {
			query("INSERT INTO abonement_offer (id_abonement, id_user) VALUES (2, 10)");
		}
		if (isset($_POST["button_offer_bear"])) {
			query("INSERT INTO abonement_offer (id_abonement, id_user) VALUES (3, 10)");
		}
		if (isset($_POST["button_offer_lion"])) {
			query("INSERT INTO abonement_offer (id_abonement, id_user) VALUES (4, 10)");
		}
	}
?>