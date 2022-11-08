<?php
    $conn = new mysqli("localhost:3306", "root", "", "food_ordering_system");
    $sql = sprintf("SELECT * FROM Orders WHERE `email` = '%s'", $_COOKIE['userEmail']);

    $result = $conn -> query($sql);
?>

<html>
    <head>
        <title>Food Ordering System | My Order</title>
        <link rel="stylesheet" href="./css/myorders.css">
        <link rel="stylesheet" href="./css/navbar.css">
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
                        </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </body>
</html>
