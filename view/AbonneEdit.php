<?php
include'../controller/database.php';

$response = $db->prepare('SELECT * FROM abonne WHERE id = :id');
$response->bindParam(':id', $_GET['id']);
$response->execute();
$abonne = $response->fetch();
$id = $_GET['id'];

if(!empty($_POST)){
    $request = $db->prepare('UPDATE `abonne` SET `nom` = :nom, `prenom` = :prenom WHERE id = :id');
    $request->execute(array(
        'prenom' => $_POST['prenom'],
        'nom' => $_POST['nom'],
        'id' => $id
    ));

    header("Location: ../view/abonneList.php");
}

?>

<a href="../index.php">Homepage</a>
<br>
<br>
<a href="abonneList.php">Liste des Abonnéés</a>

<form method="post">
    <h1>Modifier Abonnés</h1>
    <label for="name">Prenom</label>
    <input type="text" name="prenom" id="name" value=<?=$abonne['prenom']?> required>
    <br>
    <br>
    <label for="lastname">Nom</label>
    <input type="text" name="nom" id="lastname" value=<?=$abonne['nom']?> required>
    <br>
    <br>
    <button type="submit">Edit</button>
</form>