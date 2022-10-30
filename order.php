<?php
    $conn = new mysqli("localhost:3306", "root", "", "food_ordering_system");
    $id = rand(10000, 99999);
    $sql = sprintf("INSERT INTO Orders VALUES (%d, '%s', '%s', '%s')", $id, $_COOKIE['userEmail'], $_POST['item'], 'Pending');

    $conn -> query($sql);

    header("Location: userHome.php");