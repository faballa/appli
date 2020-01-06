<?php
require  'connex.php';
if (!empty($_GET['id'])) {
	$id = checkInput($_GET['id']);
}
if (!empty($_POST)) {
	$id = checkInput($_POST['id']);
	$db = Database::db();
	$statement= $db->prepare(" DELETE FROM patients WHERE id = ?");
	$statement->execute(array($id));
		Database::discon();
		header("Location: home.php"); 
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
			<h1><strong>SUPPRIMEZ UN PATIENTS</strong></h1>
			<p class="alert alert-warning">Etes vous sur de Supprimer  <?php echo $id;?></p>
				<form class="form" role="form" action="delete_patient.php" method="post">
			<input type="hidden" name="id" value="<?php echo $id; ?>"/>
         	<div class="form-actions col-md-8">
         	<button type="submit" class="btn btn-warning">OUI</button>	
				<a href="home.php" class="btn btn-danger">NON</a>
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

