<?php
include'../controller/database.php';
$response = $db->prepare('SELECT * FROM `abonne`');
$response->execute();
$abonnes = $response->fetchAll();
?>
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
    </tr>
    <?php } ?>
    </tbody>
</table>
