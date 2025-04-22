<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Traitement</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
    <a href="index.php"><div class="logo">🚗</div></a>
        <form action="traitement.php" method="GET" style="display: inline-block; margin-left: 20px;">
            <input type="text" name="recherche" placeholder="Rechercher un véhicule">
            <button type="submit">Rechercher</button>
        </form>
    </header>
    <nav>
        <a href="index.php">Accueil</a>
        <a href="formulaire.php">Inscription</a>
        <a href="#">Nos véhicules</a>
        <a href="#">Contact</a>
    </nav>
    <main>
        <h2>Résultat du traitement</h2>

        <?php

        // barre de rechercge

        if (isset($_GET['recherche'])) {
            echo "<p>Vous avez recherchee : <strong>" . $_GET['recherche'] . "</strong></p>";
        }

        // Traitement du formlaire 

        if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['confirm_email'])) {
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $email = $_POST['email'];
            $confirm_email = $_POST['confirm_email'];

            if ($email != $confirm_email) {
                echo "Les emails ne sont pas pareil !";
            } else {
                $connexion = mysqli_connect("localhost", "root", "", "garage");

                if ($connexion) {
                    $sql = "INSERT INTO utilisateurs (nom, prenom, email) VALUES ('$nom', '$prenom', '$email')";
                    $resultat = mysqli_query($connexion, $sql);

                    if ($resultat) {
                        echo "Inscription réussie !";
                    } else {
                        echo "Erreur lors de l'enregistrement.";
                    }

                    mysqli_close($connexion);
                } else {
                    echo "Connexion à la base impossible.";
                }
            }
        }
        ?>
    </main>

    <footer>
        
    </footer>
</body>
</html>
