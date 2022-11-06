<?php
    $conn = new mysqli("localhost:3306", "root", "", "food_ordering_system");
    $sql = sprintf("SELECT * FROM Users WHERE `email` = '%s'", $_POST['email']);

    $result = $conn -> query($sql);

    if ($result -> num_rows > 0)
    {
        header("Location: index.php");
        return;
    }

    $sql = sprintf("INSERT INTO Users VALUES('%s', '%s')", $_POST['email'], $_POST['password']);

    $conn -> query($sql);

    setcookie("userEmail", $_POST['email'], time() + 3600, "/");
    header("Location: userHome.php");