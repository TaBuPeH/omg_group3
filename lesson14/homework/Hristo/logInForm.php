<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="CSS/main.css">

    <?php
        session_start();
    ?>


</head>
<body>


<header>

    <nav>

        <a href="index.php" id="homeButton">Home</a>

    </nav>

</header>
<section>

    <form action="functions/login.php" method="post">

        <label for="username">Account name:</label>
        <input type="text" name="username" id="username">
        <label for="password">Password:</label>
        <input type="password" name="password" id="password">
        <?php
        if( $_SESSION['incorrectPass'] == true )
        {
            echo "<p id='warning'>Wrong username or password</p>";
        }
        ?>
        <input type="submit" value="enter" id="submit">


    </form>

</section>


<footer>    </footer>


</body>
</html>