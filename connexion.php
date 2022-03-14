<?php
require('config.php');
require('user.php');
session_start();

// Define variables and initialize with empty values
$email = $password = "";
$email_err = $password_err = "";
$_SESSION["user"] = null;
$_SESSION["loggedin-as-admin"] = false;
// Processing form data when form is submitted
if (isset($_POST["login"]) && $_POST["login"]) {

    // Check if email is empty
    if (empty(trim($_POST["email"]))) {
        $email_err = "Please enter email.";
    } else {
        $email = trim($_POST["email"]);
    }

    // Check if password is empty
    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter your password.";
    } else {
        $password = trim($_POST["password"]);
    }

    // Validate credentials
    if (empty($email_err) && empty($password_err)) {
        // Prepare a select statement
        $sql = "SELECT id, firstname, lastname, email, password  FROM user WHERE email = ?";


        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_email);

            // Set parameters
            $param_email = $email;

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                // Store result
                mysqli_stmt_store_result($stmt);

                // Check if username exists, if yes then verify password
                if (mysqli_stmt_num_rows($stmt) == 1) {
                    echo "Account found.";
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $firstname, $lastname, $email, $hashed_password);
                    if (mysqli_stmt_fetch($stmt)) {
                        if (password_verify($password, $hashed_password)) {
                            // Password is correct, so start a new session
                            $actual_user = new user($id, $firstname, $lastname, $email);
                            $_SESSION["user"] = $actual_user;
                            header("location: home.php");
                        } else {
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else {
                    // Display an error message if username doesn't exist
                    $email_err = "No account found with that email.";
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Close connection
    mysqli_close($link);
}
?>


<html>

<head>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>

<body id="pageConnexion">
    <header>
        <img class="banniere" />
        <h1>WEB-NEWS</h1>
        <nav>
            <li><a href="home.html">Accueil</a></li>
            <li><a href="journaliste.html">Journaliste</a></li>
            <li><a href="connexion.html">Connexion</a></li>
            <li><a href="créationCompte.html">Creer un compte</a></li>
        </nav>
    </header>

    <form class="connexion" action="" method="post">

        <div class="connexion">

            <h2> Connexion</h2>

            <p>
                <label for="email">Email :</label>
                <input type="email" name="email" class="input-box" placeholder="Your Email" value="<?php echo $email; ?>">

            </p>

            <p class="password">
                <label for="password">Mot de passe :</label>
                <input type="password" name="password" class="input-box" placeholder="Your Password" value="<?php echo $password; ?>">
            </p>

            <p>
                <input type="submit" value="validate" name="login">
            </p>
            <span><?php echo $email_err ?></span>
            <span><?php echo $password_err ?></span>

    </form>
    </div>
</body>

</html>