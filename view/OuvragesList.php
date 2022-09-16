<?php
include'../controller/database.php';
$response = $db->prepare('SELECT * FROM `ouvrage`');
$response->execute();
$ouvrages = $response->fetchAll();
?>
<h1>Liste des Ouvrages</h1>
<a href="formulaireOuvrages.php">Formulaire Ouvrages</a>
<br>
<br>
<a href="../index.php">Homepage</a>
<br>
<br>
<table style="border: black 2px solid">
    <thead>
    <tr style="border-bottom: black 2px solid">
        <th style="border-bottom: black 2px solid; border-right: black 2px solid">id</th>
        <th style="border-bottom: black 2px solid; border-right: black 2px solid">Titre</th>
        <th style="border-bottom: black 2px solid; border-right: black 2px solid">Auteur</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($ouvrages as $ouvrage) { ?>
    <tr>
        <td style="border-bottom: black 2px solid; border-right: black 2px solid"><?= $ouvrage['id']?></td>
        <td style="border-bottom: black 2px solid; border-right: black 2px solid"><?= $ouvrage['titre']?></td>
        <td style="border-bottom: black 2px solid; border-right: black 2px solid"><?= $ouvrage['auteur']?></td>
        <td style="border-bottom: black 2px solid; border-right: black 2px solid"><a href="supprimer.php?id=<?= $ouvrage['id']?>&table=`ouvrage`">Supprimer</a></td>
    </tr>
    <?php } ?>
    </tbody>
</table>
