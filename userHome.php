<html>
    <head>
        <link rel="stylesheet" href="./css/userHome.css">
        <link rel="stylesheet" href="./css/navbar.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
        <title>Food Ordering System | Home</title>
    </head>
    <body>
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="#">
                 <img src="./img/logo.jpg" alt="Image not found!">
        </a>
        <a href="myorders.php">My Orders</a>

         <a href="logout.php">Logout</a>
        </nav>

       
       

        
        <?php
            if (!isset($_COOKIE['userEmail']))
                header("Location: index.php");
        ?>

        <div class="food_menu">
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
        </div>
    </body>
</html>