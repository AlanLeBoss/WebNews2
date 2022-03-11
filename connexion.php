<?php
require('bdd.php');
?>

<html>

    <head>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body id="pageConnexion">
        <header>
            <img class="banniere"/>
            <h1>WEB-NEWS</h1>
            <nav>
                <li><a href="home.html">Accueil</a></li>
                <li><a href="journaliste.html">Journaliste</a></li>
                <li><a href="connexion.html">Connexion</a></li>
                <li><a href="créationCompte.html">Creer un compte</a></li>
            </nav>
        </header>
        
        <form class="connexion">

            <div class="connexion">
              
                <h2> Connexion</h2>

                <p>
                    <label for="email">Email :</label>
                    <input type="text" name="email" id="email" required>
                    
                </p>

                <p class ="password">
                    <label for="mdp">Mot de passe :</label>
                    <input type="text" name="mdp" id="mdp" required>
                </p>

                <p>
                    <a href="journaliste.html">Valider</a>
                </p>
                
            
            </form>
        </div>
    </body>
</html>