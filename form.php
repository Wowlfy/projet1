<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>john McClane</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <h1>Contact moi</h1>
    <form>
        <input type="text" placeholder="Nom" id="lastName" />
        <br><br>
        <input type="text" placeholder="Prenom" id="firstName" />
        <br><br>
        <input type="email" placeholder="Email" id="email" />
        <br><br>
        <label>Commentaire</label>
        <br>
        <textarea id="comments" rows="4"></textarea>
        <br><br>
        <button onclick="sendContact();">envoyer</button>
    </form>
</body>

</html>