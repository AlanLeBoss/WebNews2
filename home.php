<?php
require('bdd.php');
?>
<html>
    <head>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <header>
            <img class="banniere"/>
            <h1>WEB-NEWS</h1>
            <nav>
                <li><a href="home.php">Accueil</a></li>
                <li><a href="journaliste.html">Journaliste</a></li>
                <li><a href="connexion.html">Connexion</a></li>
                <li><a href="créationCompte.html">Creer un compte</a></li>
                <li><a href="redactionjournaliste.html">Redaction Journaliste</a></li>
            </nav>

        </header>

        <div class="utilisateur">
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


        <footer>

        </footer>

    </body> 

</html>