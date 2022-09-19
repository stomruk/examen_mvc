<?php
include_once ("../view/part/head.php");
include_once ("../view/part/footer.php");
include_once ('../model/association.php');
include_once ("../controller/database.php");
$response = $db->prepare('SELECT * FROM `abonne`');
$response->execute();
$abonnes = $response->fetchAll();
$response = $db->prepare('SELECT * FROM `ouvrage`');
$response->execute();
$ouvrages = $response->fetchAll();
/*
$response = $db->prepare('SELECT * FROM `abonne`');
$response->execute();
$abonnes = $response->fetchAll();
var_dump($abonnes);
*/

if(!empty($_POST)){
    $association = new Association($_POST['AssosNameID'], $_POST['AssosTitreID']);
    $request = $db->prepare('INSERT INTO `association_abonne_ouvrage` (`id_abonne`, `id_ouvrage`) VALUES (:id_abonne, :id_ouvrage)');
    $request->execute(array(
        'id_abonne' => $association->getidAbonne(),
        'id_ouvrage' => $association->getidOuvrage()
    ));
}



?>
<a href="../index.php">Homepage</a>
<br>
<br>
<a href="associationList.php">Liste des Associations</a>

<form method="post">
    <h1>Formulaire Ouvrages</h1>
    <label for="titre">Abonneés</label>
    <select name="AssosNameID" id="titre">
        <?php foreach ($abonnes as $abonne) { ?>
        <option value=<?=$abonne['id']?>> <?=$abonne['prenom']. ' ' .$abonne['nom']?></option>
        <?php } ?>
    </select>
    <br>
    <br>
    <label for="name">Ouvrage</label>
    <select name="AssosTitreID" id="name">
        <?php foreach ($ouvrages as $ouvrage) { ?>
            <option value=<?=$ouvrage['id']?>> <?=$ouvrage['titre']. ' fait par ' .$ouvrage['auteur']?></option>
        <?php } ?>
    </select>
    <br>
    <br>
    <button type="submit">Submit</button>
</form>
