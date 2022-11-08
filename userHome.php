<html>
    <head>
        <link rel="stylesheet" href="./css/userHome.css">
        <link rel="stylesheet" href="./css/navbar.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
        <title>Food Ordering System | Home</title>
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
                            <a class="nav-link active" href="myorders.php">My Orders</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" href="logout.php">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <?php
            if (!isset($_COOKIE['userEmail']))
                header("Location: index.php");
        ?>
        <!---Bootstrapcode-->
<div class="main">
<div class="card-group">
  <div class="card">
  <img src="./img/samosa.png" alt="Image not found!">
    <div class="card-body">
    <h3>Samosa</h3>
                <form action="order.php" method="post">
                    <input type="text" name="item" value="Samosa" style="display: none">
                    <input type="submit" value="Order now">
                </form>
    </div>
  </div>
  <div class="card">
  <img src="./img/pizza.png" alt="Image not found!">
    <div class="card-body">
    <h3>Pizza</h3>
                <form action="order.php" method="post">
                    <input type="text" name="item" value="Pizza" style="display: none">
                    <input type="submit" value="Order now">
                </form>
    </div>
  </div>
  <div class="card">
  <img src="./img/burger.png" alt="Image not found!">
    <div class="card-body">
    <h3>Burger</h3>
                <form action="order.php" method="post">
                    <input type="text" name="item" value="Burger" style="display: none">
                    <input type="submit" value="Order now">
                </form>
    </div>
  </div>
</div>
<!--2nd Row-->
<div class="card-group">
  <div class="card">
  <img src="./img/pavbhaji.png" alt="Image not found!">
    <div class="card-body">
    <h3>Pav Bhaji</h3>
                <form action="order.php" method="post">
                    <input type="text" name="item" value="PavBhaji" style="display: none">
                    <input type="submit" value="Order now">
                </form>
    </div>
  </div>
  <div class="card">
  <img src="./img/noodles.png" alt="Image not found!">
    <div class="card-body">
    <h3>Noodles</h3>
                <form action="order.php" method="post">
                    <input type="text" name="item" value="Noodles" style="display: none">
                    <input type="submit" value="Order now">
                </form>
    </div>
  </div>
  <div class="card">
  <img src="./img/friedrice.png" alt="Image not found!">
    <div class="card-body">
    <h3>Fried Rice</h3>
                <form action="order.php" method="post">
                    <input type="text" name="item" value="Fried Rice" style="display: none">
                    <input type="submit" value="Order now">
                </form>
    </div>
  </div>
</div>
</div>
        <!-- <div class="food_menu">
            <div class="item">
                <img src="./img/samosa.png" alt="Image not found!">
                <h3>Samosa</h3>
                <form action="order.php" method="post">
                    <input type="text" name="item" value="Samosa" style="display: none">
                    <input type="submit" value="Order now">
                </form>
            </div>

            <div class="item">
                <img src="./img/pizza.png" alt="Image not found!">
                <h3>Pizza</h3>
                <form action="order.php" method="post">
                    <input type="text" name="item" value="Pizza" style="display: none">
                    <input type="submit" value="Order now">
                </form>
            </div>

            <div class="item">
                <img src="./img/burger.png" alt="Image not found!">
                <h3>Burger</h3>
                <form action="order.php" method="post">
                    <input type="text" name="item" value="Burger" style="display: none">
                    <input type="submit" value="Order now">
                </form>
            </div>

            <div class="item">
                <img src="./img/pavbhaji.png" alt="Image not found!">
                <h3>Pav Bhaji</h3>
                <form action="order.php" method="post">
                    <input type="text" name="item" value="PavBhaji" style="display: none">
                    <input type="submit" value="Order now">
                </form>
            </div>

            <div class="item">
                <img src="./img/noodles.png" alt="Image not found!">
                <h3>Noodles</h3>
                <form action="order.php" method="post">
                    <input type="text" name="item" value="Noodles" style="display: none">
                    <input type="submit" value="Order now">
                </form>
            </div>

            <div class="item">
                <img src="./img/friedrice.png" alt="Image not found!">
                <h3>Fried Rice</h3>
                <form action="order.php" method="post">
                    <input type="text" name="item" value="Fried Rice" style="display: none">
                    <input type="submit" value="Order now">
                </form>
            </div>
        </div> -->
    </body>
</html>