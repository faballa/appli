<?php
require  'connex.php';
/*;*//*	echo '<h1>Welcome '.$_SESSION['sess_nom'].'</h1>';
	echo '<h4><a href="logout.php">Logout</a></h4>';*/

$errorFirstname = $errorname  = $erroradresse = $errorphone = $errorimage = $erroremail = $errorspecialite = $firstname = $name = $adresse = $phone = $image = $email = $specialite ="";
if (!empty($_POST)) {
	$firstname = checkInput($_POST['firstname']);
	$name = checkInput($_POST['name']);
	$adresse = checkInput($_POST['adresse']);
	$phone = checkInput($_POST['phone']);
	$image = checkInput($_FILES['image']['name']);
	$imagePath = 'images/docteurs/' . basename($image);
	$imageExtension = pathinfo($imagePath,PATHINFO_EXTENSION);
	$email = checkInput($_POST['email']);
	$specialite= checkInput($_POST['specialite']);
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
	if (empty($specialite)) {
		$errorspecialite = "ce champ ne peut pas etre vide";
		$isSucces = false;
	}
	if ($isSucces && $isUploadSucces) {
		$db = Database::db();
		$statement = $db->prepare("INSERT INTO `docteur` (`doct_prenom`, `doct_nom`, `doct_adresse`, `doct_phone`, `doct_avatar`, `doct_email`, `doct_specialite`) VALUES (?, ?, ?, ?, ?, ?, ?)");
		$statement->execute(array($firstname,$name,$adresse,$phone,$image,$email,$specialite));
		$bd = Database::db();
		$statements = $bd->prepare("");
		Database::discon();
		header("Location: home.php");
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
			 &nbsp;&nbsp;&nbsp;<a class="btn btn-default" href="home.php">ACCUEIL</a>&nbsp;&nbsp;&nbsp;<a class="btn btn-default" href="con_docteur.php"><span class="glyphicon glyphicon-arrow-left"></span>LES DOCTEURS</a>
			<h1><strong>FORMULAIRE AJOUT DOCTEUR</strong></h1>
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
				<label for="specialite">specialite </label>
				<input type="text" name="specialite" id="name" class="form-control" value="<?php echo $specialite;?>">
				<span class="help-inline"><?php echo $errorspecialite; ?></span>
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

