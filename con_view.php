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
<br><br>	
	 <?php
$id=$_GET['id'];
   require  'connex.php';
      $db = Database::db();
     $statement = $db->prepare('SELECT patients.id,patients.pat_prenom,patients.pat_nom,patients.pat_age,patients.pat_adresse,patients.pat_phone,patients.pat_image,patients.pat_email,patients.pat_symptone,secteur.nom_secteur,docteur.doct_prenom,docteur.doct_nom,docteur.doct_specialite FROM docteur INNER JOIN bloc on docteur.id = bloc.id_docteur INNER JOIN secteur on secteur.id_secteur=bloc.id_secteur INNER JOIN service on secteur.id_secteur=service.idsecteur iNNER JOIN secrecteur on secrecteur.id=service.idsecreteur INNER JOIN traitement on traitement.id_docteur=docteur.id INNER JOIN patients on patients.id=traitement.id_patient WHERE patients.id="'.$id.'"');
     $statement -> execute(array($id));
    $items = $statement->fetch();
   
     function checkInput($data){
     	$data=trim($data);
     	$data=stripcslashes($data);
     	$data=htmlspecialchars($data);
     	return $data;
     }
     Database::discon();


?> 
<div class="container admin">
	<div class="row">
		<div class="col-sm-4">
			<h1  class="p-3 mb-2 bg-primary text-white"><strong></strong><?php echo ' &nbsp;'.$items['pat_prenom'].'  '.$items['pat_nom'];?></h1>
		<br>
		<form>
			<div class="form-group">
				<label>AGE : </label><?php echo ' '.$items['pat_age'].' ';?>
			</div>
			<div class="form-group">
				<label>ADRESSE : </label><?php echo ' '.$items['pat_adresse'].' ';?>
			</div>
			<div class="form-group">
				<label>TELEPHON : </label><?php echo ' '.$items['pat_phone'].' ';?>
			</div>
			<div class="form-group">
				<label>EMAIL : </label><?php echo ' '.$items['pat_email'].' ';?>
			</div>
			<div class="form-group">
				<label>SYMPTON : </label><?php echo ' '.$items['pat_symptone'].' ';?>
			</div>
			<div class="form-actions">
				<a class="btn btn-primary" href="home.php"><span class="glyphicon glyphicon-arrow-left"></span>RETOUR</a>
			</div>
		</form>
	</div>
	<div class="col-sm-4">
		<br><br><br><br>
		<form>
			<div class="form-group">
			<label><u>SECTEUR</u></label><br>
			<b><?php echo ' '.$items['nom_secteur'].' ';?></b>
		</div>
			<div class="form-group">
			<label><u>PRENOM DOCTEUR</u></label><br>
			<b><?php echo ' '.$items['doct_prenom'].' ';?></b>
		</div>
			<div class="form-group">
			<label><u>NOM DOCTEUR</u></label><br>
			<b><?php echo ' '.$items['doct_nom'].' ';?></b>
		</div>
			<div class="form-group">
			<label><u>SPECIALITE</u></label><br>
			<b><?php echo ' '.$items['doct_specialite'].' ';?></b>
		</div>
		</form>
	</div>
	<div class="col-sm-4">
		<div class="thumbnail">
			<img src="<?php echo 'images/'.$items['pat_image']; ?>" alt="">
				<h4 class=" p-3 mb-2 bg-primary text-white"><center>PATIENTS</center></h4>
			</div>
		</div>
	</div>
</div>
</div>
</body>
</html>

