<?php

$bdd = new PDO('mysql:host=localhost;dbname=cv;charset=utf8', 'root', '');

$test= $bdd->query(" INSERT INTO nom_de_la_table");
while ($nom_de_la_table= $test->fetch(PDO::FETCH_OBJ)) {}

echo $test;
