<?php
include_once ("../view/part/head.php");
include_once ("../view/part/footer.php");
include_once ('../model/abonne.php');
include_once ("../controller/database.php");
/*
$response = $db->prepare('SELECT * FROM `abonne`');
$response->execute();
$abonnes = $response->fetchAll();
var_dump($abonnes);
*/
if(!empty($_POST)){
    $abonne = new Abonne($_POST['nom'], $_POST['prenom']);
    $request = $db->prepare('INSERT INTO `abonne` (`nom`, `prenom`) VALUES (:nom, :prenom)');
    $request->execute(array(
        'nom' => $abonne->getNom(),
        'prenom' => $abonne->getPrenom()
    ));
}


?>
<a href="../index.php">Homepage</a>
<br>
<br>
<a href="abonneList.php">Liste des Abonnéés</a>

<form method="post">
    <h1>Formulaire Abonnés</h1>
    <label for="name">Prenom</label>
    <input type="text" name="prenom" id="name" placeholder="prenom" required>
    <br>
    <br>
    <label for="lastname">Nom</label>
    <input type="text" name="nom" id="lastname" placeholder="nom" required>
    <br>
    <br>
    <button type="submit">Submit</button>
</form>
