<?php

require  'connex.php';
session_start();

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
$nom_docteur = "";
if (!empty($_POST)) {
	$nom_docteur = checkInput($_POST['nom_docteur']);
	$issuces= true;
	$id = $_SESSION['sess_user_id'];
	if ($issuces) {
				$dbase = Database::db();
		$statemente = $dbase->prepare("INSERT INTO `bloc` (`id_secteur`, `id_docteur`) VALUES (?, ?)");
		$statemente->execute(array($id,$nom_docteur));
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
		<div class="col-md-12" style="background: url('images/9.png');">
         <div class="col-md-6">
			<br>
			 	<a class="btn btn-default" href="home.php"><span class="glyphicon glyphicon-arrow-left"></span>ACCUEIL</a>
			<h1><strong>SECTEUR</strong></h1>
		<form class="form" role="form" action="" method="post">
			<div class="form-group col-md-10">
				<label for="category">NOM DES DOCTEURS </label>
	            <select  id="category" name="nom_docteur">
	            	<?php
	            	$db = Database::db();
	            	foreach ($db->query('SELECT * FROM docteur') as $row) {
	            		echo '<option value="'.$row['id'].'">'.$row['doct_prenom'].' '.$row['doct_nom'].'</option>';
	            	}
	            	 ?>
	            </select>	
			</div>
					<div class="form-action">
         	<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span>AJOUTER</button>	
				<button type="reset" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span>ANNULER</button>
			</div>
			
		</form>
  </div>
  <div class="col-md-6">
  	<img  src="images/sec.png" width="100%">
  </div>

	
	
	</div>
</div>
</div>
</body>
</html>

