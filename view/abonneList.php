<?php
include'../controller/database.php';
$response = $db->prepare('SELECT * FROM `abonne`');
$response->execute();
$abonnes = $response->fetchAll();
?>
<h1>Liste des Abonnés</h1>
<a href="formulaireAbonne.php">Formulaire Abonnés</a>
<br>
<br>
<a href="../index.php">Homepage</a>
<br>
<br>
<table style="border: black 2px solid">
    <thead>
    <tr style="border-bottom: black 2px solid">
        <th style="border-bottom: black 2px solid; border-right: black 2px solid">id</th>
        <th style="border-bottom: black 2px solid; border-right: black 2px solid">Prenom</th>
        <th style="border-bottom: black 2px solid; border-right: black 2px solid">Nom</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($abonnes as $abonne) { ?>
    <tr>
        <td style="border-bottom: black 2px solid; border-right: black 2px solid"><?= $abonne['id']?></td>
        <td style="border-bottom: black 2px solid; border-right: black 2px solid"><?= $abonne['prenom']?></td>
        <td style="border-bottom: black 2px solid; border-right: black 2px solid"><?= $abonne['nom']?></td>
        <td style="border-bottom: black 2px solid; border-right: black 2px solid"><a href="supprimer.php?id=<?= $abonne['id']?>&table=`abonne`">Supprimer</a></td>
        <td style="border-bottom: black 2px solid; border-right: black 2px solid"><a href="AbonneEdit.php?id=<?= $abonne['id']?>">Editer</a></td>
    </tr>
    <?php } ?>
    </tbody>
</table>
