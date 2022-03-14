<?php
require "user.php";
session_start();
if (!isset($_SESSION["user"]) || !$_SESSION["user"]) {
    header("location: connexion.php");
    exit;
  }
?>
<html>

<head>
    <style>
        <?php include "style.css" ?>
    </style>
</head>

<body>
    <header class="header">
        <img class="logo" src="https://previews.123rf.com/images/yevgenijd/yevgenijd1708/yevgenijd170800003/83237779-logo-d-%C3%A9cologie-symbole-du-monde-eco-ic%C3%B4ne-concept-%C3%A9cologique-pour-le-logo-de-l-entreprise-vecteur.jpg" />
        <ul>
            <li><a href="home.php">Accueil</a></li>
            <li><a href="journaliste.html">Journaliste</a></li>
            <li><a href="connexion.html">Connexion</a></li>
            <li><a href="créationCompte.html">Creer un compte</a></li>
            <li><a href="redactionjournaliste.html">Redaction Journaliste</a></li>
        </ul>

    </header>
    <div class="content">
        <div class="utilisateur">
            <h1>Bonjour <?php echo $_SESSION["user"]->getFirstname() ?></h1>
            <h1 class="titre">Utilisateur :</br>Envoie tes preuves !</h1>

            <div class="articles">
                <h2>Evenement 1 : Ecologie de la Paris fashion week</h2>
                <a href="#">Envoie tes preuves !</a>

                <h2>Evenement 2 : Innondation a Paris</h2>
                <a href="#">Envoie tes preuves !</a>

                <h2>Evenement 3 : Film a l'affiche</h2>
                <a href="#">Envoie tes preuves !</a>

                <h2>Evenement 4 : Incendie a Marseille</h2>
                <a href="#">Envoie tes preuves !</a>
            </div>
        </div>

        <div class="journaliste">
            <h1 class="titre">Journaliste :</br>Ecrire un article !</h1>

            <div class="bouton">
                <p><a href="connexion.html">Identification</a></p>
                <p><a href="créationCompte.html">Creer un compte</a></p>
            </div>
        </div>

    </div>
    <footer>

    </footer>

</body>

</html>