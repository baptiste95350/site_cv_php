<?php include('inc/header.inc.php');?>

<?php 

if(!empty($_GET["id_wishlist"])) {
        session_start();
        $isInWishList = false;
        foreach($_SESSION as $key => $value) {
                if ($value == $_GET["id_wishlist"]) {
                        $isInWishList = true;
                }
        }
        if (!$isInWishList) {
                $_SESSION['modif'.$_GET["id_wishlist"]] = $_GET["id_wishlist"];
        }
}

?>


<?php

if (!empty($_POST)) {

   

   

    $_POST["titre"] = htmlentities($_POST["titre"], ENT_QUOTES);
    $_POST["titre2"] = htmlentities($_POST["titre2"], ENT_QUOTES);
    $_POST["information"] = htmlentities($_POST["information"], ENT_QUOTES);
    $_POST["date"] = htmlentities($_POST["date"], ENT_QUOTES);


    $requeteSQL = "INSERT INTO nom_de_la_table (titre,titre2,information,date )";
    $requeteSQL .= " VALUE ('$_POST[titre]', '$_POST[titre2]','$_POST[information]','$_POST[date]')";
    $result = $bdd->exec($requeteSQL);
    echo $result . ' actualitée a été enregistrée<br>';
    
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


    <?php
    $result = $bdd->query("SELECT * FROM nom_de_la_table ORDER BY idtitre DESC");
    while ($nom_de_la_table = $result->fetch(PDO::FETCH_OBJ)) { ?>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><?php echo $nom_de_la_table->titre; ?></h5> 
                <p><?php echo $nom_de_la_table->titre2; ?></p>
                <a href="modif.php?id=<?php echo $nom_de_la_table->idtitre; ?>" class="btn btn-primary">Modification</a>
            </div>
        </div>
    <?php 
    }
    ?>
</div>



