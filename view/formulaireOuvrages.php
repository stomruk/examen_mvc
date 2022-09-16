<?php
include_once ("../view/part/head.php");
include_once ("../view/part/footer.php");
include_once ('../model/ouvrages.php');
include_once ("../controller/database.php");
/*
$response = $db->prepare('SELECT * FROM `abonne`');
$response->execute();
$abonnes = $response->fetchAll();
var_dump($abonnes);
*/

if(!empty($_POST)){
    $ouvrage = new Ouvrage($_POST['titre'], $_POST['auteur']);
    $request = $db->prepare('INSERT INTO `ouvrage` (`titre`, `auteur`) VALUES (:titre, :auteur)');
    $request->execute(array(
        'titre' => $ouvrage->getTitre(),
        'auteur' => $ouvrage->getAuteur()
    ));
}



?>
<a href="../index.php">Homepage</a>

<form method="post">
    <h1>Formulaire Ouvrages</h1>
    <label for="titre">Titre</label>
    <input type="text" name="titre" id="titre" placeholder="titre" required>
    <br>
    <br>
    <label for="auteur">Auteur</label>
    <input type="text" name="auteur" id="auteur" placeholder="auteur" required>
    <br>
    <br>
    <button type="submit">Submit</button>
</form>
