<?php 

   $pseudo = $email = $password1 = $password2 = "";
   $pseudoError = $emailError = $password1Error = $password2Error = "";
   $mot = $password1 == $password2;
   $motError = "";

  if(!empty($_POST)) {
  	$pseudo = verifyInput($_POST["pseudo"]);
  	$email = verifyInput($_POST["email"]);
  	$password1 = verifyInput($_POST["password1"]);
  	$password2 = verifyInput($_POST["password2"]);

    	if (empty($pseudo)) {
      $pseudoError = "Saisissez votre pseudo";
      }
    	if(empty($email)) {
    		$emailError = "Saisissez votre email";
    	}
    	if(empty($password1)) {	
    		$password1Error = "Saisissez votre password";
    	}
    	if(empty($password2)) {		
    		$password2Error = "Saisissez votre password";
      }
  
  }
  if (!$mot) {
    $motError = "les deux mots de passes ne corospondent pas";
  }

  function verifyInput($var){
  	$var = trim($var);
  	$var = stripcslashes($var);
  	$var = htmlspecialchars($var);
    return $var;
  }
?>
 <?php
try
{
$bdd = new PDO('mysql:host=localhost;dbname=nan', 'root', '');
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}

$req = $bdd->prepare('INSERT INTO  inscription (pseudo, email,
password1, password2, ) VALUES(:pseudo,
:email, :password1, :password2)');
$req->execute(array(
'pseudo' => $pseudo,
'email' => $email,
'password1' => $password1,
'password2' => $password2
));

header('location: index.php');
?>



<!DOCTYPE html>
<html>
<head>
	<title>Inscription</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

	<div id="close">
    <div class="row">
	<form action="inscription.php" method="post">
			<div class="col_sm_6">
				<label for="pseudo">Pseudo</label>
				<input type="text" id="pseudo" name="pseudo">
				<p><?php echo $pseudoError; ?></p>
			</div>
			<div class="col_sm_6">
				<label for="Email">Email</label>
				<input type="email" id="email" name="email">
				<p><?php echo $emailError; ?></p>
			</div>
			<div class="col_sm_6">
				<label for="password1">Mot de passe</label>
				<input type="password" id="password1" name="password1">
				<p><?php echo $password1Error; ?></p>
			</div>
			<div class="col_sm_6">
				<label for="password2">Confirmer votre mot de passe</label>
				<input type="password" id="password2" name="password2">
				<p><?php echo $password2Error; ?></p>
        <?php echo $motError ?>
			</div>
			<div class="col_sm_6">
			<input type="submit" value="Valider">
			</div>
	</form>
</div>
	</div>
</body>
</html>