<html>
    <head>
        <title>Food Ordering System | Home</title>
    </head>
    <body>
        <a href="logout.php">Logout</a>

        <?php
            if (!isset($_COOKIE['userEmail']))
                header("Location: index.php");
        ?>

        <div class="food_menu">
            <div class="item">
                <img src="./img/samosa.png" alt="Image not found!">
                <h3>Samosa</h3>
                <button class="order-btn" onclick="redirect('order.php?item=Samosa')">Order now</button>
            </div>

            <div class="item">
                <img src="./img/pizza.png" alt="Image not found!">
                <h3>Pizza</h3>
                <button class="order-btn" onclick="redirect('order.php?item=Pizza')">Order now</button>
            </div>

            <div class="item">
                <img src="./img/burger.png" alt="Image not found!">
                <h3>Burger</h3>
                <button class="order-btn" onclick="redirect('order.php?item=Burger')">Order now</button>
            </div>

            <div class="item">
                <img src="./img/pavbhaji.png" alt="Image not found!">
                <h3>Pav Bhaji</h3>
                <button class="order-btn" onclick="redirect('order.php?item=PavBhaji')">Order now</button>
            </div>

            <div class="item">
                <img src="./img/noodles.png" alt="Image not found!">
                <h3>Noodles</h3>
                <button class="order-btn" onclick="redirect('order.php?item=Noodles')">Order now</button>
            </div>

            <div class="item">
                <img src="./img/friedrice.png" alt="Image not found!">
                <h3>Fried Rice</h3>
                <button class="order-btn" onclick="redirect('order.php?item=FriedRice')">Order now</button>
            </div>
        </div>
    </body>
</html>