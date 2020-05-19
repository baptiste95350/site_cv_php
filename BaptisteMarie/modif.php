<?php include("inc/header.inc.php"); ?>

<?php

if (!empty($_POST)) {

   

   

    $_POST["titre"] = htmlentities($_POST["titre"], ENT_QUOTES);
    $_POST["titre2"] = htmlentities($_POST["titre2"], ENT_QUOTES);
    $_POST["information"] = htmlentities($_POST["information"], ENT_QUOTES);
    $_POST["date"] = htmlentities($_POST["date"], ENT_QUOTES);


    $requeteSQL = "UPDATE nom_de_la_table SET titre ='$_POST[titre]', titre2 ='$_POST[titre2]', information ='$_POST[information]', date ='$_POST[date]' WHERE idtitre = $_GET[id]";
    $result = $bdd->exec($requeteSQL);
    echo $result . ' Une modification a été enregistrée<br>';
    
}


?>

<div class="starter-template">  
    <form method="POST" action="" enctype='multipart/form-data'>

        <div class="form-group">
            <label for="titre">titre</label>
            <input type="texte" class="form-control" id="titre" name="titre">
        </div>

        <div class="form-group">
            <label for="titre">sous titre</label>
            <input type="texte" class="form-control" id="titre2" name="titre2">
        </div>

        <div class="form-group">
            <label for="contenu">Contenu</label>
            <textarea rows="10" class="form-control" id="information" name="information"></textarea>
        </div>

        <div class="form-group">
            <label for="titre">date de publication</label>
            <input type="texte" class="form-control" id="date" name="date">
        </div>
       
        

        <button type="submit" class="btn btn-primary">Enregistrer</button>

    </form>