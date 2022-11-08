<?php
    if (!isset($_COOKIE['userEmail']))
    {
        header("Location: index.php");
        return;
    }

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
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="./img/logo.png" alt="Logo" width="90" height="50" class="d-inline-block align-text-top">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="userHome.php">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" href="logout.php">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

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
