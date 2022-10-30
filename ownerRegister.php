<?php
    $conn = new mysqli("localhost:3306", "root", "", "food_ordering_system");
    $sql = sprintf("SELECT * FROM Owners WHERE `email` = '%s'", $_POST['email']);

    $result = $conn -> query($sql);

    if ($result -> num_rows > 0)
    {
        header("Location: ownerLogin.php");
        return;
    }

    $sql = sprintf("INSERT INTO Owners VALUES('%s', '%s')", $_POST['email'], $_POST['password']);

    $conn -> query($sql);

    setcookie("ownerEmail", $_POST['email'], time() + 3600, "/");
    header("Location: ownerHome.php");