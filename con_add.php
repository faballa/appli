
<?php


require  'connex.php';
      $db = Database::db();?>
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
	
<div class="container admin">
	<div class="row">
		<div class="col-md-8">
			<h1><strong>FORMULAIRE AJOUT PATIENTS</strong></h1>
				<form class="form" role="form" action="" method="post" enctype="multipart/form-data">
			<div class="form-group col-md-8">
				<label>PRENOM </label>
				<input type="text" name="firstname" id="firstname" class="form-control" value="<?php echo $firstname;?>">
				<span class="help-inline"><?php echo $errorFirstname; ?></span>
			</div>
			<div class="form-group col-md-8">
				<label>NOM </label>
				<input type="text" name="name" id="name" class="form-control" value="<?php echo $name;?>">
				<span class="help-inline"><?php echo $errorname; ?></span>
			</div>
			<div class="form-group col-md-8">
				<label>AGE</label>
				<input type="number" name="age" step="1" id="name" class="form-control" value="<?php echo $age;?>">
				<span class="help-inline"><?php echo $errorage; ?></span>
			</div>
			<div class="form-group col-md-8">
				<label>ADRESSE </label>
				<input type="text" name="adresse" id="name" class="form-control" value="<?php echo $adresse;?>">
				<span class="help-inline"><?php echo $erroradresse; ?></span>
			</div>
			<div class="form-group col-md-8">
				<label>TELEPHON </label>
				<input type="number" name="phone" id="name" class="form-control" value="<?php echo $name;?>">
				<span class="help-inline"><?php echo $errorname; ?></span>
			</div>
			<div class="form-group col-md-8">
				<label>IMAGES </label>
				<input type="text" name="firstname" id="firstname" class="form-control">
			</div>
				<div class="form-group col-md-8">
				<label>EMAIL </label>
				<input type="text" name="email" id="name" class="form-control" value="<?php echo $name;?>">
				<span class="help-inline"><?php echo $errorname; ?></span>
			</div>
			<div class="form-group col-md-8">
				<label>SYMPTON </label>
				<input type="text" name="symptone" id="name" class="form-control" value="<?php echo $name;?>">
				<span class="help-inline"><?php echo $errorname; ?></span>
			</div>

		</form>

	</div>
	<div class="col-md-4">
			<div class="form-actions">
				<a class="btn btn-primary" href="home.php"><span class="glyphicon glyphicon-arrow-left"></span>RETOUR</a>
			</div>
	</div>
</div>
</div>
</body>
</html>

