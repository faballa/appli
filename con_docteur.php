<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>sunu clinique</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
<!--<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/mtb.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">
<!------ Include the above in your HEAD tag ---------->
</head>
<!-- Team -->
<body>
<section id="team" class="pb-5">
  <div class="container">
        <h5 class="section-title h1">
        <a class="btn btn-success" href="home.php">ACCUEIL</a>&nbsp;&nbsp;LES DOCTEURS&nbsp;&nbsp;
        <a class="btn btn-success" href="ajout_docteur.php"><span class="glyphicon glyphicon-pencil"></span>AJOUTER</a></h5>
        <div class="row">
           <?php
   require  'connex.php';
      $db = Database::db();
     $statement = $db->query('SELECT * FROM docteur');
     while($items = $statement->fetch())
     {
     echo '  <div class="col-xs-12 col-sm-6 col-md-3"><div class="image-flip"><div class="mainflip">
                       <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">';
                                    echo '<p><img class="img-fluid" src="images/image1.jpg" alt="card image"></p>';
                                    echo '<h4 class="card-title">'.$items['doct_prenom'].' '.$items['doct_nom'].'</h4>';
                                    echo ' <p class="card-text">'.$items['doct_adresse'].'</p>';
                                    echo ' <p class="card-text">'.$items['doct_phone'].'</p>';
                                     echo ' <h5 class="card-text">'.$items['doct_specialite'].'</h5>';
                                    echo '<a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus">+</i></a>';
                                                                 echo '</div>
                            </div>
                        </div>';
                       echo '<div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Sunlimetech</h4>
                                    <p class="card-text">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-google"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    </div>
                ';
}

?>

</div> 

        </div>
    </div>
</section>

 <div id="footer" style="
    /*background: #007b5e;*/
    background: #000;
    color: white;
    margin: 50px 0px 0px 0px;
    padding: 60px 0 40px;
    display: block;">
      <div class="container">
         <div class="row">
    <div class="col-md-12 col-xs-12">
      <center>
              <h6>Copyright 2019 SONATEL ACADEMY</h6>
      <h6>Francisco lopez & .</h6>
      <h6> Creation d'une systeme de reservation des patients </h6>
      </center>

    </div>
     
   </div> 
  </div>
    </div>

</body>
</html>