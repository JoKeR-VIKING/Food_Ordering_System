<?php
    $conn = new mysqli("localhost:3306", "root", "", "food_ordering_system");
    $sql = "SELECT * FROM Orders WHERE `status` = 'Pending'";

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
                    <td>
                        <form action="accept.php" method="post">
                            <input type="text" name="id" value="<?php echo $row[0]; ?>" style="display: none">
                            <input type="submit" value="✓">
                        </form>
                    </td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
    </body>
</html>
