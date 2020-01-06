<?php 
session_start(); 
include("db.php");
?>
<?php
if(isset($_POST['username']) && $_POST['username'] != '' && isset($_POST['password']) && $_POST['password'] != '') {
	$username = trim($_POST['username']);
	$password = trim($_POST['password']);
	if($username != "" && $password != "") {
		try {
			$query = "SELECT * FROM secrecteur INNER JOIN service on service.idsecreteur=secrecteur.id
INNER JOIN secteur on secteur.id_secteur=service.idsecteur WHERE secrecteur.username=:username and secrecteur.password=:password";
			$stmt = $db->prepare($query);
			$stmt->bindParam('username', $username, PDO::PARAM_STR);
			$stmt->bindValue('password', $password, PDO::PARAM_STR);
			$stmt->execute();
			$count = $stmt->rowCount();
			$row   = $stmt->fetch(PDO::FETCH_ASSOC);
			if($count == 1 && !empty($row)) {
				/******************** Your code ***********************/
				$_SESSION['sess_user_id']   = $row['id'];
				$_SESSION['sess_username'] = $row['username'];
				$_SESSION['sess_prenom'] = $row['sec_prenom'];
				$_SESSION['sess_nom'] = $row['sec_nom'];
				$_SESSION['sess_adresse'] = $row['sec_adresse'];
				$_SESSION['sess_phone'] = $row['sec_phone'];
				$_SESSION['sess_avatar'] = $row['sec_avatar'];
				$_SESSION['sess_secteur'] = $row['nom_secteur'];
				echo "home.php";
			} else {
				echo "invalid";
			}
		} catch (PDOException $e) {
			echo "Error : ".$e->getMessage();
		}
	} else {
		echo "Both fields are required!";
	}
} else {
	header('location:./');
}
?>
