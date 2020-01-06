<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>sunu clinique</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="main.css">
<!--<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/mtb.js"></script>

</head>

<body>
<div class="container admin">
	<div class="row">
		<div class="col-sm-6">
			<h1><strong>Patient</strong></h1>
		</div>
		<br>
		<form>
			<div class="form-group">
				<label>Prenom</label><?php echo ' '.items['prenom'];?>
			</div>
		</form>
				<form>
			<div class="form-group">
				<label>Prenom</label><?php echo ' '.items['prenom'];?>
			</div>
		</form>
				<form>
			<div class="form-group">
				<label>Prenom</label><?php echo ' '.items['prenom'];?>
			</div>
		</form>
				<form>
			<div class="form-group">
				<label>Prenom</label><?php echo ' '.items['prenom'];?>
			</div>
		</form>
				<form>
			<div class="form-group">
				<label>Prenom</label><?php echo ' '.items['prenom'];?>
			</div>
		</form>
	</div>
</div>
</body>
</html>

<!-- <?php
  require  'connex.php';
      $db = Database::db();
        if (!empty($_GET['id'])) {
     	$id=checkInput($_GET['id']);
     }
     $id=$_GET['id'];
      $statement=$db->prepare('SELECT patients.id,patients.prenom,patients.nom,patients.symptone,secteur.nom_secteur FROM docteur INNER JOIN bloc on docteur.id = bloc.id_docteur INNER JOIN secteur on secteur.id=bloc.id_secteur INNER JOIN service on secteur.id=service.idsecteur iNNER JOIN secrecteur on secrecteur.id=service.idsecreteur INNER JOIN traitement on traitement.id_docteur=docteur.id INNER JOIN patients on patients.id=traitement.id_patient WHERE patients.id="$id"');
     $statement -> execute(array($id));
     while($items = $statement->fetch())
     {

     }
   
     function checkInput($data){
     	$data=trim($data);
     	$data=stripcslashes($data);
     	$data=htmlspecialchars($data);
     	return $data;
     }
     Database::discon();
?> -->
  require  'connex.php';
      $db = Database::db();
        if (!empty($_GET['id'])) {
     	$id=checkInput($_GET['id']);
     }
 /*    $id=$_GET['id'];*/
      $statement=$db->prepare('SELECT patients.id,patients.prenom,patients.nom,patients.symptone,secteur.nom_secteur FROM docteur INNER JOIN bloc on docteur.id = bloc.id_docteur INNER JOIN secteur on secteur.id=bloc.id_secteur INNER JOIN service on secteur.id=service.idsecteur iNNER JOIN secrecteur on secrecteur.id=service.idsecreteur INNER JOIN traitement on traitement.id_docteur=docteur.id INNER JOIN patients on patients.id=traitement.id_patient WHERE patients.id=?');
     $statement -> execute(array($id));
     while($items = $statement->fetch())
     {

     }
   
     function checkInput($data){
     	$data=trim($data);
     	$data=stripcslashes($data);
     	$data=htmlspecialchars($data);
     	return $data;
     }
     Database::discon();


