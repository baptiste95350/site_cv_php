<?php include('inc/header.inc.php');?>

<?php


$result = $bdd->query("SELECT * FROM nom_de_la_table  ORDER BY idtitre DESC");
while ($dossier = $result->fetch(PDO::FETCH_OBJ)) { ?>

        <div class="card">
                <div class="card-body">
                        <h5 class="card-title"><?php echo $dossier->titre; ?></h5>
                        <p><?php echo $dossier->titre2; ?></p>
                        <p><?php echo $dossier->information; ?></p>
                        <p><?php echo $dossier->date; ?></p>
                </div>
        </div>  

<?php }

?>