<?php
include'../controller/database.php';
$response = $db->prepare('SELECT * FROM `association_abonne_ouvrage`');
$response->execute();
$assosiations = $response->fetchAll();
?>
<h1>Liste des Associations</h1>
<a href="formulaireAssociation.php">Formulaire Association</a>
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
    <?php foreach($assosiations as $assosiation) { ?>
    <tr>
        <td style="border-bottom: black 2px solid; border-right: black 2px solid"><?= $assosiation['id']?></td>
        <td style="border-bottom: black 2px solid; border-right: black 2px solid"><?= $assosiation['id_abonne']?></td>
        <td style="border-bottom: black 2px solid; border-right: black 2px solid"><?= $assosiation['id_ouvrage']?></td>
        <td style="border-bottom: black 2px solid; border-right: black 2px solid"><a href="supprimer.php?id=<?= $assosiation['id']?>&table=`assosoation`">Supprimer</a></td>
        <td style="border-bottom: black 2px solid; border-right: black 2px solid"><a href="AbonneEdit.php?id=<?= $assosiation['id']?>&table=assosoation">Editer</a></td>
    </tr>
    <?php } ?>
    </tbody>
</table>
