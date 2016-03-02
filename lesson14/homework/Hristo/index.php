<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="CSS/main.css">

    <?php
        session_start();

        if( isset($_SESSION['loggedClient']) == null )
        {
            $_SESSION['loggedClient'] = false;
            $_SESSION['loggedUser'] = "";
            $_SESSION['incorrectPass'] = false;
        }

    ?>

</head>
<body>


    <header>

        <nav>

            <?php

                if($_SESSION['loggedClient'] == true )
                {
                    $loggedClient = $_SESSION['loggedUser'];
                    echo "<p id='userInfo'>Logged as <b>$loggedClient</b></p>";
                    echo " <a href=\"settings.php\">Settings</a>";
                    echo "<a href='functions/logout.php'>Log Out</a>";
                }
                else
                {
                    echo "<a href='logInForm.php'>Log In</a>";
                }

            ?>

            <a href="" id="homeButton">Home</a>

        </nav>

    </header>
    <section>

        <p class="msg">Welcome to our Website</p>

    </section>
    <footer>    </footer>

</body>
</html>