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
<link rel="stylesheet" type="text/css" href="main.css">

</head>

<body>
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#monNemu">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">SUNU CLINIQUE</a>
        </div>
        <div  class="collapse navbar-collapse" id="monNemu">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Accueil</a></li>
            <li><a href="">Qui sommes nous</a></li>
            <li><a href="con_docteur.php">Docteur</a></li>
            <li><a href="">Contact</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="" class="btn btn-default"><span class="glyphicon glyphicon-log-in "></span> Connexion</a></li>
          </ul>
        </div>
      </div>
    </nav>
	<div class="container mtb-margin-top">
		<div class="row">
			<div class="col-md-12">
        <form class="form-horizontal" method="POST" id="login_form">
            <div class="row">
                <div class="col-md-4 col-xs-4"></div>
                <div class="col-md-4 col-xs-8">
                  <img src="images/sec.png"/>
                    <h2 style="color: white">SUNU SECRETERIAT</h2>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-xs-4"></div>
                <div class="col-md-4 col-xs-4">
                    <div class="form-group has-danger">
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-at"><img src="images/username.png" width="20" /></i></div>
                            <input type="text" name="username" class="form-control" id="username" placeholder="Username" autocomplete="off" required autofocus>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-xs-4"></div>
                <div class="col-md-4 col-xs-4">
                    <div class="form-group">
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-key"><img src="images/password.png" width="20" /></i></div>
                            <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-xs-4"></div>
                <div class="col-md-4 col-xs-4">
                    <input type="submit" class="btn btn-success" value="Login">
					<label class="form-check-label">
						<span class="text-danger align-middle" id="errorMsg"></span>
					</label>
                </div>
            </div>
        </form>
    </div>
   </div>
 </div>
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
                <h5>Copyright 2019 SONATEL ACADEMY</h5>
                <h5>Francisco lopez & .</h5>
                <h5> Creation d'une systeme de reservation des patients </h5>
              </center>
            </div>
          </div> 
        </div>
    </div>

</body>
</html>
