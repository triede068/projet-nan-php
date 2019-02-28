<?php
$nom = $prenom = $montant = $sexe = $telephone = $pays = $operateur =  $nom_b = $prenom_b = $telephone_b = $pays_b ="";
$nomError = $prenomError = $montantError = $sexeError = $telephoneError = $paysError = $operateurError =$nom_bError =
$prenom_bError = $telephone_bError = $pays_bError ="";


if (!empty($_POST)) {
	$nom = verifyInput($_POST["nom"]);
	$prenom = verifyInput($_POST["prenom"]);
	$montant =verifyInput($_POST["montant"]);
	$sexe = verifyInput($_POST["sexe"]);
	$telephone = verifyInput($_POST["telephone"]);
	$nom_b =verifyInput($_POST["nom_b"]);
	$pays = verifyInput($_POST["pays"]);
    $operateur = verifyInput($_POST["operateur"]);
	$prenom_b = verifyInput($_POST["prenom_b"]);
	$telephone_b =verifyInput($_POST["telephone_b"]);
	$pays_b = verifyInput($_POST["pays_b"]);
	$isSuccess		  = true;
	



	if (empty($nom)) {
	   $nomError = "Saissisez votre nom";
	   $isSuccess = false;
	}
	if (empty($prenom)) {
	   $prenomError = "Saissisez votre prenom";  
	   $isSuccess = false;
	}
	if (empty($montant)) {
	   $montantError = "Saissisez le montant"; 
	   $isSuccess = false; 
	}
	if (empty($sexe)) {
	   $sexeError = "Saissisez votre genre";
	   $isSuccess = false;
	}
	if (!isphone($telephone)) {
	   $telephoneError = "Saissisez votre numéro de téléphone";  
	   $isSuccess = false;
	}
	if (empty($nom_b)) {
	   $nom_bError = "Saissisez le numéro de votre pièce";
	   $isSuccess = false;
	}
	if (empty($pays)) {
	   $paysError = "Saissisez votre pays";  
	   $isSuccess = false;
	}
	if (empty($operateur)) {
	   $operateurError = "Quelle est le nom  de votre operateur";   
	   $isSuccess = false;
	}
	if (empty($prenom_b)) {
	   $prenom_bError = "Saissisez le nom du bénéficiaare";  
	   $isSuccess = false;
	}
	if (!isphone($telephone_b)) {
	   $telephone_bError = "Saissisez le numérodu bénéficiaare";   
	   $isSuccess = false;
	}
	if (empty($pays_b)) {
	   $pays_bError = "Saissisez votre pays";  
	   $isSuccess = false;
	}

	 if($isSuccess)
         {
            $db = Database::connect();
            $statement = $db->prepare("INSERT INTO connexion (pseudo, password) values(?, ?)");
            $statement->execute(array($pseudo,$password));
            Database::disconnect();
            header("Location: index.php");
        }



}

function isphone($var){

	return preg_match("/^[0-9-]+$/", $var);
}


function verifyInput($var){
	$var = trim($var);
	$var = stripslashes($var);
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

$req = $bdd->prepare('INSERT INTO  Transfert (nom, prenom,
montant, Sexe, telephone, pays,
operateur, nom_b, prenom_b, telephone_b, pays_b, pays_b) VALUES(
:nom, :prenom, :montant, :sexe, :telephone, :pays,
:operateur, :nom_b, :prenom_b, :telephone_b, :pays_b)');
$req->execute(array(
'nom' => $nom,
'prenom' => $prenom,
'montant' => $montant,
'sexe' => $sexe,
'telephone' => $telephone,
'pays' => $pays,
'operateur' => $operateur,
'nom_b' => '$nom_b',
'prenom_b' => $prenom_b,
'telephone_b' => $telephone_b,
'pays_b' => $pays_b
));
header('location: traitement.php');
?>

<!doctype>
<!DOCTYpE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="Transfert.css">
	<meta http-equiv="content-type" content="texte/html">
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
</head>
<body>
	

<div id="container">
<form method="post" action="Transfert.php">
	<fieldset>
		<legend>Transfert d'argent en ligne</legend>
		    <div class="row">
			<div class="col_sm_6">
		      <label for="nom">Nom<span class="etoil">*</span></label>
		      <input type="text" name="nom" id="nom" placeholder="Votre nom" >
		      <span class="error"><?php echo $nomError; ?></span>
		    </div>
		    <div class="col_sm_6">
		    	<label for="prenom">prénom<span class="etoil">*</span></label>
		    	<input type="text" name="prenom" id="prenom" placeholder="Votre prénom">
		    	<span class="error"><?php echo $prenomError; ?></span>
		    </div>
		    <div class="col_sm_6">
		    	<label for="montant">Montant<span class="etoil">*</span></label>
		    	<input type="text" name="montant" id="montant" placeholder="La somme à envoyer">
		    	<span class="error"><?php echo $montantError; ?></span>
		    </div>
		    <div class="col_sm_6">
		       <label>Sexe<span class="etoil">*</span></label>	
		    	<select name="sexe" id="sexe" align="right">
		    		<option></option>
				<option  value="H">Homme</option>
				<option value="F">Femme</option>
				</select>
				<span class="error"><?php echo $sexeError; ?></span>
		    </div>
		    <div class="col_sm_6">
		    	<label for="telephone">Numero de téléphone<span class="etoil">*</span></label>
		    	<input type="tel" name="telephone" id="telephone" placeholder="Votre Numero de téléphone">
		    	<span class="error"><?php echo $telephoneError; ?></span>
		    </div>
		    <div class="col_sm_6">
		    	<label for="pays">pays<span class="etoil">*</span></label>
		    	<select name="pays" id="pays">
		    		<option>Votre pays</option>
		    		<option>BENIN</option>
		    		<option>BURKINA FASO</option>
		    		<option>COTE D'IVOIR</option>
		    		<option>MALI</option>
		    		<option>NIGER</option>
		    		<option>SENEGAL</option>
		    		<option>TOGO</option>
		    	</select>
		    	<span class="error"><?php echo $paysError; ?></span>
		    </div>
		    <div class="col_sm_6">
		     	<label>Type d'opérateur<span class="etoil">*</span></label>
		     	<select name="operateur">
		     		<option>Choix de l'opérateur</option>
		     		<option>MOOV</option>
		    		<option>MTN</option>
		    	    <option>ORANGE</option>
		    	    
		     	</select>
		     	<span class="error"><?php echo $operateurError; ?></span>
		    </div>
		    <div class="col_sm_6">
		    	<label for="nom_b">Nom du bénéficiare<span class="etoil">*</span></label>
		    	<input type="text" name="nom_b" id="nom_b" placeholder="Taper le nom du bénéficiare">
		    	<span class="error"><?php echo $nom_bError; ?></span>
		    </div>
		    <div class="col_sm_6">
		    	<label for="prenom_b">Prénom du bénéficiare<span class="etoil">*</span></label>
		    	<input type="text" name="prenom_b" id="prenom_b" placeholder="Taper le prénom du bénéficiare">
		    	<span class="error"><?php echo $prenom_bError; ?></span>
		    </div>
		    <div class="col_sm_6">
		    	<label for="telephone_b">Numéro du Bénéficiare<span class="etoil">*</span></label>
		    	<input type="tel" name="telephone_b" id="telephone_b" placeholder="Taper le numéro du bénéficiare">
		    	<span class="error"><?php echo $telephone_bError; ?></span>
             </div>
             <div class="col_sm_6">
		    	<label for="pays_b">Pays du bénéficiare<span class="etoil">*</span></label>
		    	<select name="pays_b" id="pays_b">
		    		<option>pays du bénéficiare</option>
		    		<option>BENIN</option>
		    		<option>BURKINA FASO</option>
		    		<option>COTE D'IVOIR</option>
		    		<option>MALI</option>
		    		<option>NIGER</option>
		    		<option>SENEGAL</option>
		    		<option>TOGO</option>
		    	</select>
		    	<span class="error"><?php echo $pays_bError; ?></span>
		    </div>
		    <div class="col_sm_6">
		    	<label for="frais">Frais de transaction<span class="etoil">*</span></label>
		    	<input type="text" name="frais" id="frais">
		    </div>
		    <div class="col_sm_6">
		    	<input type="reset" name="" value="Annuler"> <input type="submit" name="" value="Enregistrer">
		    </div>
		</div>
	</fieldset>
</form>
</div>
</body>
</html>