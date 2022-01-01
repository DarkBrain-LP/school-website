<!DOCTYPE html>
<html>
<head>
	<title> page d'inscription</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="inscriptionStyle.css" media="screen" type="text/css" />

</head>
<body>
			<div id="container"> 
                <form action="cible.php" method="POST"> 
                    <h1>Inscription</h1> 
                    <label><b>Nom </b></label> <input type="text" placeholder="Entrer votre nom " name="username" required>
                    <label><b>Prénom</b></label> <input type="text" placeholder="Entrer votre prénom" name="prenom" required> 
                    <label>Sexe</label>
                    <input type="radio" name="sexe" size="25">M<input type="radio" name="sexeForm" size="25">F <br>
                    <label>Date de naissance</label> 
			        <input type="Date" name="date" size="25"><br>
                   
                   <!-- <label>Nationalité</label> 
			        <select name="Nationalité">
				    <option value="choix">Choisir votre nationnalité </option>
				    <option value="togo">togolaise</option>	
                    <option value="benin">beninoise</option>	
                    <option value="senegale">senegalaise</option>!--><br>
                    
                    <label>Série du BAC</label>
                    <input type="text" name="serie" size="25"><br> 

    

                    <label>Année d'obtention du BAC</label>
                    <input type="text" size="25">
				    
                   <a href="index.php"> <input type="submit" id='submit' value='Envoyer' > </a>
                   <?php echo""; ?>
                    
                </form> 
            </div>
</body>
</html>