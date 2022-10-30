<html>
    <head>
        <title>Food Ordering System | Home</title>
    </head>
    <body>
        <a href="logout.php">Logout</a>

        <?php
            if (!isset($_COOKIE['ownerEmail']))
                header("Location: index.php");
        ?>
    </body>
</html>
