<?php 
$pseudo = " " ;$password = " ";
$pseudoError = $passwordError = "";

if (!empty($_POST)) {


    $pseudo = verifyInput($_POST["pseudo"]);
    $password = verifyInput($_POST["password"]);



    if(empty($pseudo)) {
    $pseudoError = "Saisissez votre pseudo";
}
if(empty($password)) {
    $passwordError = "Saisissez votre mot de passe";
}
}

function verifyInput($var) {
    $var = trim($var);
    $var = stripcslashes($var);
    $var = htmlspecialchars($var);
    return $var;
}
header('location: transfert.php');
?>


<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Connexion</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color: #eeddef;">
    

    <div id="container">
        <a href="inscription.php"><button btn btn-sussece>Crée un compte</button></a>
        <h3>Connectez-vous s'il vous plait</h3>
    	<form method="post" action="connexion.php" role="form">
             <div class="row">
    		<div class="col_sm_6">
    			<label for="pseudo">Pseudo</label>
    			<input type="text" id="pseudo" name="pseudo" placeholder="Tapez votre pseudo">
                <p><?php echo $pseudoError; ?></p>
    		</div>
    		<div class="col_sm_6">
    			<label for="password">Mot de passe</label>
    			<input type="password" name="password" id="password" placeholder="Tapez votre mot de passe">
                <p><?php echo $passwordError; ?></p>
    		</div>
    		<div class="col_sm_6">
    			<input type="submit" value="CONNECTER" class="submit">
    		</div>
        </form>
    	</form>
    </div>
</body>
</html>