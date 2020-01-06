<?php
require  'connex.php';
session_start();
$id_st = $_SESSION['sess_user_id'];
$errorFirstname = $errorname = $errorage  = $erroradresse = $errorphone = $errorimage = $erroremail = $errorsymptone = $firstname = $name = $age = $adresse = $phone = $image = $email = $symptone ="";
if (!empty($_POST)) {
	$firstname = checkInput($_POST['firstname']);
	$name = checkInput($_POST['name']);
	$age = checkInput($_POST['age']);
	$adresse = checkInput($_POST['adresse']);
	$phone = checkInput($_POST['phone']);
	$image = checkInput($_FILES['image']['name']);
	$imagePath = 'images/' . basename($image);
	$imageExtension = pathinfo($imagePath,PATHINFO_EXTENSION);
	$email = checkInput($_POST['email']);
	$symptone= checkInput($_POST['symptone']);
	$id_d= checkInput($_POST['nom_docteur']);
	$isSucces = true;
	$isUploadSucces = false;
	if (empty($firstname)) {
		$errorFirstname = "ce champ ne peut pas etre vide";
		$isSucces = false;
	}
	if (empty($name)) {
		$errorname = "ce champ ne peut pas etre vide";
		$isSucces = false;
	}
	if (empty($age)) {
		$errorage = "ce champ ne peut pas etre vide";
		$isSucces = false;
	}
	if (empty($adresse)) {
		$erroradresse = "ce champ ne peut pas etre vide";
		$isSucces = false;
	}
	if (empty($phone)) {
		$errorphone = "ce champ ne peut pas etre vide";
		$isSucces = false;
	}
	if (empty($image)) {
		$errorimage = "ce champ ne peut pas etre vide";
		$isSucces = false;
	}else{
		$isUploadSucces = true;
		if ($imageExtension != "jpg" && $imageExtension != "png" && $imageExtension != "jpeg" && $imageExtension != "gif") {
			$errorimage = "les fichiers autorises sont : .jpg, .png, .jpeg, .gif";
			$isUploadSucces = false;
		}if (file_exists($imagePath)) {
			$errorimage = "le fichier existe deja";
			$isUploadSucces = false;
		}if ($_FILES["image"]["size"] > 50000000) {
			$errorimage = "le fichier ne doit pas depasser les 5000KB";
			$isUploadSucces = false;
			
		}if ($isUploadSucces) {
			if (!move_uploaded_file($_FILES["image"]["tmp_name"], $imagePath)) {
				$errorimage = "Il y a une erreur lors de l'upload";
				$isUploadSucces = false;
			}
		}
	}
	if (empty($email)) {
		$erroremail = "ce champ ne peut pas etre vide";
		$isSucces = false;
	}
	if (empty($symptone)) {
		$errorsymptone = "ce champ ne peut pas etre vide";
		$isSucces = false;
	}
	if ($isSucces && $isUploadSucces) {
		$db = Database::db();
		$statement = $db->prepare("INSERT INTO `patients` ( `pat_prenom`, `pat_nom`, `pat_age`, `pat_adresse`, `pat_phone`, `pat_image`, `pat_email`, `pat_symptone`) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
		$statement->execute(array($firstname,$name,$age,$adresse,$phone,$image,$email,$symptone));
           		 
		header("Location: patient_docteur.php?id='".$name."'");
	}
}
   function checkInput($data){
     	$data=trim($data);
     	$data=stripcslashes($data);
     	$data=htmlspecialchars($data);
     	return $data;
     }
     ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>sunu clinique</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="main.css">


<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/mtb.js"></script>

</head>
<body>
<br>		
<div class="container admin">
	<div class="row">
		<div class="col-md-8" style="background: url('images/9.png');">
			<br>
			 &nbsp;&nbsp;&nbsp;<a class="btn btn-default" href="home.php"><span class="glyphicon glyphicon-arrow-left"></span>ACCUEIL</a>
			<h1><strong>FORMULAIRE AJOUT PATIENTS</strong></h1>
				<form class="form" role="form" action="" method="post" enctype="multipart/form-data">
			<div class="form-group col-md-8">
				<label for="firstname">PRENOM </label>
				<input type="text" name="firstname" id="firstname" class="form-control" value="<?php echo $firstname;?>">
				<span class="help-inline"><?php echo $errorFirstname; ?></span>
			</div>
			<div class="form-group col-md-8">
				<label for="name">NOM </label>
				<input type="text" name="name" id="name" class="form-control" value="<?php echo $name;?>">
				<span class="help-inline"><?php echo $errorname; ?></span>
			</div>
			<div class="form-group col-md-8">
				<label for="age">AGE</label>
				<input type="number" name="age" step="1" id="name" class="form-control" value="<?php echo $age;?>">
				<span class="help-inline"><?php echo $errorage; ?></span>
			</div>
			<div class="form-group col-md-8">
				<label for="adresse">ADRESSE </label>
				<input type="text" name="adresse" id="name" class="form-control" value="<?php echo $adresse;?>">
				<span class="help-inline"><?php echo $erroradresse; ?></span>
			</div>
			<div class="form-group col-md-8">
				<label for="phone">TELEPHON </label>
				<input type="number" name="phone" id="name" class="form-control" value="<?php echo $phone;?>">
				<span class="help-inline"><?php echo $errorphone; ?></span>
			</div>
			<div class="form-group col-md-8">
				<label for="image">IMAGES </label>
				<input type="file" name="image" id="name" class="form-control"  value="<?php echo $image;?>">
				<span class="help-inline"><?php echo $errorimage; ?></span>
			</div>
				<div class="form-group col-md-8">
				<label for="email">EMAIL </label>
				<input type="text" name="email" id="name" class="form-control" value="<?php echo $email;?>">
				<span class="help-inline"><?php echo $erroremail; ?></span>
			</div>
			<div class="form-group col-md-8">
				<label for="symptone">SYMPTONE </label>
				<input type="text" name="symptone" id="name" class="form-control" value="<?php echo $symptone;?>">
				<span class="help-inline"><?php echo $errorsymptone; ?></span>
			</div>
			<br>
         	<div class="form-actions col-md-8">
         	<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span>AJOUTER</button>	
				<button type="reset" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span>ANNULER</button>
			</div>
			 <br>
		</form>
  

	</div>
	<div class="col-md-4">
	<img  src="images/sec.png" width="100%">
	</div>
</div>
</div>
</body>
</html>

