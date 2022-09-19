<?php
include'../controller/database.php';

$response = $db->prepare('SELECT * FROM ouvrage WHERE id = :id');
$response->bindParam(':id', $_GET['id']);
$response->execute();
$ouvrage = $response->fetch();
$id = $_GET['id'];

if(!empty($_POST)){
    $request = $db->prepare('UPDATE `ouvrage` SET `titre` = :titre, `auteur` = :auteur WHERE id = :id');
    $request->execute(array(
        'titre' => $_POST['titre'],
        'auteur' => $_POST['auteur'],
        'id' => $id
    ));

    header("Location: ../view/ouvrageList.php");
}

?>

<a href="../index.php">Homepage</a>
<br>
<br>
<a href="ouvrageList.php">Liste des Ouvrage</a>

<form method="post">
    <h1>Modifier Ouvrage</h1>
    <label for="titre">Titre</label>
    <input type="text" name="titre" id="titre" value=<?=$ouvrage['titre']?> required>
    <br>
    <br>
    <label for="auteur">Auteur</label>
    <input type="text" name="auteur" id="auteur" value=<?=$ouvrage['auteur']?> required>
    <br>
    <br>
    <button type="submit">Edit</button>
</form>