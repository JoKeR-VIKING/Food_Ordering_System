<?php
    $conn = new mysqli("localhost:3306", "root", "", "food_ordering_system");
    $sql = "SELECT * FROM Orders WHERE `status` = 'Pending'";

    $result = $conn -> query($sql);
?>

<html>
    <head>
        <title>Food Ordering System | My Order</title>
        <link rel="stylesheet" href="./css/myorders.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    </head>
    <body>
        <a href="logout.php">Logout</a>

        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Order</th>
                    <th scope="col">Status</th>
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
