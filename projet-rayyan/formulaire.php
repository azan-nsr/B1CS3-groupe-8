<?php
include 'decoupes/haut.php';
?>

    <main>
        <h2>Formulaire d'inscription</h2>
        <form action="traitement.php" method="POST">

            <label for="nom">Nom :</label><br>
            <input type="text" name="nom" id="nom" required><br><br>

            <label for="prenom">Prénom :</label><br>
            <input type="text" name="prenom" id="prenom"><br><br>

            <label for="email">Email :</label><br>
            <input type="email" name="email" id="email" required><br><br>

            <label for="confirm_email">Confirmation Email :</label><br>
            <input type="email" name="confirm_email" id="confirm_email" required><br><br>

            <button type="submit">Envoyer</button>
        </form>
    </main>

    <?php
include 'decoupes/bas.php';