<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Données de la base de données</title>
</head>
<body>
    <h1>Données de la base de données</h1>

    <?php
    // Connexion à la base de données
    $connexion = new mysqli("localhost", "root", "IdVk2003985!", "base de données joker ibrah site");

    // Vérification de la connexion
    if ($connexion->connect_error) {
        die("Erreur de connexion à la base de données : " . $connexion->connect_error);
    }

    // Récupération des données depuis la base de données
    $requete = "SELECT * FROM ma_table";
    $resultat = $connexion->query($requete);

    // Affichage des données dans le HTML
    if ($resultat->num_rows > 0) {
        echo "<ul>";
        while ($ligne = $resultat->fetch_assoc()) {
            echo "<li>" . $ligne["champ1"] . " - " . $ligne["champ2"] . "</li>";
        }
        echo "</ul>";
    } else {
        echo "Aucune donnée trouvée dans la base de données.";
    }

    // Fermeture de la connexion
    $connexion->close();
    ?>

</body>
</html>
