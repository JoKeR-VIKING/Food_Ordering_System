<?php
    $conn = new mysqli("localhost:3306", "root", "", "food_ordering_system");
    $sql = sprintf("UPDATE Orders SET `status` = 'Accpeted' WHERE `id` = %d", $_POST['id']);

    $result = $conn -> query($sql);

    header("Location: ownerHome.php");