<?php
$id = $_GET['id'];
require  'connex.php';
echo "indexe ".$id;

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
		 <?php
      $db = Database::db();
     $statement = $db->prepare('SELECT patients.id,secteur.id_secteur,patients.pat_prenom,patients.pat_nom,patients.pat_age,patients.pat_adresse,patients.pat_phone,patients.pat_image,patients.pat_email,patients.pat_symptone,secteur.nom_secteur,docteur.doct_prenom,docteur.doct_nom,docteur.doct_specialite FROM docteur INNER JOIN bloc on docteur.id = bloc.id_docteur INNER JOIN secteur on secteur.id_secteur=bloc.id_secteur INNER JOIN service on secteur.id_secteur=service.idsecteur iNNER JOIN secrecteur on secrecteur.id=service.idsecreteur INNER JOIN traitement on traitement.id_docteur=docteur.id INNER JOIN patients on patients.id=traitement.id_patient WHERE patients.id="'.$id.'"');
     $statement -> execute(array($id));
    $items = $statement->fetch();
    $id_patient = $items['id'];
    $id_secteur = $items['id_secteur'];
$dateh = $heure = $errordateh = $errorheure ="";
if (!empty($_POST)) {
	$dateh = checkInput($_POST['dateh']);
	$heure = checkInput($_POST['heure']);
	$issuces= true;
	if (empty($dateh)) {
		$errordateh = "cette champs ne doit pas etre vide";
		$issuces = false;
	}
	if (empty($heure)) {
		$errorheure = "cette champs ne doit pas etre vide";
		$issuces = false;
	}
	if ($issuces) {
				$dbase = Database::db();
		$statemente = $dbase->prepare("INSERT INTO `rv` (`date`, `heure`, `id_patient`, `id_secteur`) VALUES ( ?, ?, ?, ?)");
		$statemente->execute(array($dateh,$heure,$id_patient,$id_secteur));
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
     Database::discon();


?> 
<br>		
<div class="container admin">
	<div class="row">
		<div class="col-md-8" style="background: url('images/9.png');color: white">
			<br>
			 <div class="container">
			 	<div class="row">
			 		<div class="col-md-4">
			 		<a class="btn btn-default" href="home.php"><span class="glyphicon glyphicon-arrow-left"></span>ACCUEIL</a>
			 		</div>
			 		<div class="col-md-8">
			 			<?php echo 'PRENOM : &nbsp;'.$items['pat_prenom'].'<br> NOM &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :  '.$items['pat_nom'].'<br>AGE &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : '.$items['pat_age'].'<br>SYMPTONE : '.$items['pat_symptone'].' ' ;?>
			 			
			 		</div>
			 	</div>
			 </div>
			 
			<h1><strong>RENDRE-VOUS AU SECTEUR : <?php echo ' '.$items['nom_secteur'].' ';?></strong></h1>
				<form class="form" role="form" action="" method="post" enctype="multipart/form-data">
			<div class="form-group col-md-4">
				<label for="firstname">DATE </label>
				<input type="date" name="dateh" id="firstname" class="form-control" value="<?php echo $dateh;?>">
				<span class="help-inline"><?php echo $errordateh; ?></span>
			</div>
			<div class="form-group col-md-4">
				<label for="name">TEMPS DUREE </label>
				<input type="time" name="heure" id="name" class="form-control" value="<?php echo $heure;?>">
				<span class="help-inline"><?php echo $errorheure; ?></span>
			</div>
			
			<br> 
         	<div class="form-actions col-md-8">
         	<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span>AJOUTER</button>	
				<button type="reset" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span>ANNULER</button>
			</div>
			 <br>
		</form>
  
 &nbsp;
	</div>
	<div class="col-md-4">
	<img  src="images/sec.png" width="100%">
	</div>
</div>
</div>
</body>
</html>

