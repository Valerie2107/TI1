<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Contact</title>
</head>
<body>

    <?php include 'inc.header.php' ?>
    
    <?php include 'inc.menu.php'?>
    
    <main>
    <h1>Plus d'info?</h1>
    
    <img src="pages/images/contacts.jpg">
    <br>
    <form id="form" method="post" action="connexion:php" name="login">
        <p>
        <label for="nom">Votre nom: </label><input type="texte" name="nom" id="nom" required><br>
        <label for="email">Contact: </label><input type="email" name="mail" id="mail" required><br>
        <label for="texte">Commentaire</label><input type="textarea" id="textarea"></p>
        <input type="submit" value="Envoyer" id="submit">

    </form>

    </main>

    <?php include 'inc.footer.php' ?>

</body>
</html>