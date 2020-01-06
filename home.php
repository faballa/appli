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
<?php 
session_start();
if(isset($_SESSION['sess_user_id']) && $_SESSION['sess_user_id'] != "") {
/*	echo '<h1>Welcome '.$_SESSION['sess_nom'].'</h1>';
	echo '<h4><a href="logout.php">Logout</a></h4>';*/
} else { 
	header('location:index.php');
}
?>
</head>

<body>
<div class="container tete">
	<div class="row">
		<div class="col-md-2 col-xs-6">
			<img class="circle" width=100px src="<?php echo 'images/'.$_SESSION['sess_avatar'].'.jpg';?>" alt="card image" >
		</div>
			<div class="col-md-4 col-xs-12">
	    			<?php echo '<h3>'.$_SESSION['sess_prenom'].' '.$_SESSION['sess_nom'].'</h3>';?>
			<?php echo '<h6> Adresse : '.$_SESSION['sess_adresse'].'</h6>';?>
		</div> 

		
		<div class="col-md-2 col-xs-6 bg-primary">
       <strong>SECTEUR : <?php echo $_SESSION['sess_secteur'];?></strong>
       <h3>SECRETERIAT</h3>
		</div>
		<div class="col-md-2 col-xs-12">
       &nbsp;
		</div>

		<div class="col-md-2 col-xs-6">
				<a class="btn btn-danger" href="logout.php">DECONNECTE</a>
			
		</div>
	</div>


  </div> 

<br>
<div class="container admin">
	<div class="row">
		<h1><strong>LISTER DES PATIENTS</strong>&nbsp;&nbsp;<a href="ajout_patient.php" class="btn btn-success btn-lg"><span class="glyphicon glyphicon-plus"></span>ajouter patients</a>&nbsp;&nbsp;<a href="con_docteur.php" class="btn btn-success btn-lg">Voir les docteurs</a>&nbsp;&nbsp;<a href="select_docteur.php" class="btn btn-success btn-lg"><span class="glyphicon glyphicon-plus"></span>Selectionner Docteur</a></h1>
		<div class="col-xs-12 col-md-12">
		<table class="table table-stripe table-borderd">
			<thead>
				<tr>
					<!-- <th>numero</th> -->
					<th>Prenom</th>
					<th>Nom</th>
					<th>Symptone</th>
					<th>Secteur</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
	  <?php
   require  'connex.php';
      $db = Database::db();
     $statement = $db->query('SELECT patients.id,patients.pat_prenom,patients.pat_nom,patients.pat_symptone,secteur.nom_secteur FROM docteur INNER JOIN bloc on docteur.id = bloc.id_docteur INNER JOIN secteur on secteur.id_secteur=bloc.id_secteur INNER JOIN service on secteur.id_secteur=service.idsecteur iNNER JOIN secrecteur on secrecteur.id=service.idsecreteur INNER JOIN traitement on traitement.id_docteur=docteur.id INNER JOIN patients on patients.id=traitement.id_patient WHERE secrecteur.sec_prenom="'.$_SESSION['sess_prenom'].'"');
     while($items = $statement->fetch())
     {
		echo '<tr>';
		/*echo '<td>'.$items['id'].'</td>';*/
		echo '<td>'.$items['pat_prenom'].'</td>';	
		echo '<td>'.$items['pat_nom'].'</td>';	
		echo '<td>'.$items['pat_symptone'].'</td>';	
		echo '<td>'.$items['nom_secteur'].'</td>';
	
		echo '<td>
		<a href="rendrez_vous.php?id='.$items['id'].'" class="btn btn-primary
		"><span class="glyphicon glyphicon-eye-open"></span>Rendrez-vous</a> <a href="con_view.php?id='.$items['id'].'" class="btn btn-default"><span class="glyphicon glyphicon-eye-open"></span>Imprimer</a>
		<a href="edit_patient.php?id='.$items['id'].'" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span>Modifier</a>
		<a href="delete_patient.php?id='.$items['id'].'" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span>Supprimer</a>
		</td>';

     }?>
     </tbody>
		</table>
	</div>
</div>
</div>
</body>
</html>

