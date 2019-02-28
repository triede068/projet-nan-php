<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>index</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
</head>
<?php 
 require 'connexion.php';
?>
<body style="background-color: green;"> 
     </div>
    <section id="ilo">
            <div class="container">
                <div class="red-divider"></div>
                <div class="heading">
                    <h2>E-mobimoney</h2>
                </div>
                <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
                    <ol class="carousel-indicators">
                         <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                         <li data-target="#myCarousel" data-slide-to="1"></li> 
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                          <img src="images/images1.jpg" style="margin: auto;">
                          <h3>Performence et qualité</h3>
                          <p>E-mobimoney est une application de transaction en ligne sécurisée et à moindre coût</p>
                        </div>
                    <div class="item">
                      <img src="images/téléchargement.jpg" style="margin: auto;">
                      <h3>Disponibilité</h3>
                        <p>Ensemble, effectuons nos transaction dans l'espace CEDEAO pour satifaire nos famille en entant à l'étranger</p>
                      </div>
                    </div>
                  </div>
                  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span></a>
            </div>
        </section>
</body>
</html>