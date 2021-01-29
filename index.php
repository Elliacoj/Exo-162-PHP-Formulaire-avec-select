<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
</head>
<body>
    <div id="container">
        <form id="methodGet" method="GET" action="user.php">
            <div>
                <label for="name">Votre nom: </label>
                <input name="name" id="name" type="text">
            </div>

            <div>
                <label for="prenom">Votre prénom: </label>
                <input name="prenom" id="prenom" type="text">
                <input type="submit" value="Envoyer">
            </div>
        </form>

        <form id="methodPost" method="POST" action="user.php">
            <div>
                <label for="name">Votre nom: </label>
                <input name="name" id="name" type="text">
            </div>

            <div>
                <label for="prenom">Votre prénom: </label>
                <input name="prenom" id="prenom" type="text">
                <input type="submit" value="Envoyer">
            </div>
        </form>

        <form id="exoStatut" method="POST" action="user.php">
            <div>
                <label for="statut">Votre statut: </label>
                <select name="statut" id="statut">
                    <option value="Mr">Mr</option>
                    <option value="Mme">Mme</option>
                </select>
            </div>

            <div>
                <label for="name">Votre nom: </label>
                <input name="name" id="name" type="text">
            </div>

            <div>
                <label for="fichier">Document annexe: </label>
                <input name="fichier" id="fichier" type="file">
            </div>

            <div>
                <label for="prenom">Votre prénom: </label>
                <input name="prenom" id="prenom" type="text">
                <input type="submit" value="Envoyer">
            </div>
        </form>
    </div>
</body>
</html>
