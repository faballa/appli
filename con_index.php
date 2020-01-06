<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>sunu clinique</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
<!--<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/mtb.js"></script>
<style>
    body{
        background: url("images/bg2.jpg");
    }
.post-title { font-size:20px; }
.mtb-margin-top { margin-top: 20px; }
.top-margin { border-bottom:2px solid #ccc; margin-bottom:20px; display:block; font-size:1.3rem; line-height:1.7rem;}

.form-check-label {
	background-image:url(images/error.png);
	background-position:left;
	background-repeat:no-repeat;
	padding-left:1.5rem;
}
.btn-success {
	cursor:pointer;
}
#footer {
    background: #007b5e;
    color: white;
    margin: 50px 0px 0px 0px;
    padding: 60px 0 40px;
    display: block;
}
</style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">
        <font color="#007b5e">SUNU CLINIQUE VIVRANT</font></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Accueil <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="docteur.php">Docteur</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Contact</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">CONNEXION</button>
    </form>
  </div>
</nav>
	<div class="container mtb-margin-top">
		<div class="row">
			<div class="col-md-12">
			
			</div>
		</div>
		
        <form class="form-horizontal" method="POST" id="login_form">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                  <img src="images/sec.png"/>
                    <h2 style="color: #007b5e">SUNU SECRETEALE</h2>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="form-group has-danger">
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-at"><img src="images/username.png" width="20" /></i></div>
                            <input type="text" name="username" class="form-control" id="username" placeholder="Username" autocomplete="off" required autofocus>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="form-group">
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-key"><img src="images/password.png" width="20" /></i></div>
                            <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <input type="submit" class="btn btn-success" value="Login">
					<label class="form-check-label">
						<span class="text-danger align-middle" id="errorMsg"></span>
					</label>
                </div>
            </div>
        </form>
    </div>
    <div id="footer">
      <div class="container">
         <div class="row">
    <div class="col-md-12">
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
