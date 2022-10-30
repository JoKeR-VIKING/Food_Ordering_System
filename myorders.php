<?php
    $conn = new mysqli("localhost:3306", "root", "", "food_ordering_system");
    $sql = sprintf("SELECT * FROM Orders WHERE `email` = '%s'", $_COOKIE['userEmail']);

    $result = $conn -> query($sql);
?>

<html>
    <head>
        <title>Food Ordering System | My Order</title>
    </head>
    <body>
        <a href="logout.php">Logout</a>

        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Order</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while ($row = $result -> fetch_row())
                    {
                        ?>
                        <tr>
                            <td><?php echo $row[0]; ?></td>
                            <td><?php echo $row[2]; ?></td>
                            <td><?php echo $row[3]; ?></td>
                        </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </body>
</html>
