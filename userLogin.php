<?php
    $conn = new mysqli("localhost:3306", "root", "", "food_ordering_system");
    $sql = sprintf("SELECT * FROM Users WHERE `email` = '%s' AND `password` = '%s'", $_POST['email'], $_POST['password']);

    $result = $conn -> query($sql);

    if ($result -> num_rows > 0)
    {
        setcookie("userEmail", $_POST['email'], time() + 3600, "/");
        header("Location: userHome.php");
    }
    else
        header("Location: userLogin.php");