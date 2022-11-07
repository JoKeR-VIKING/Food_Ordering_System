<html>
    <head>
        <link rel="stylesheet" href="./css/userHome.css">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/navbar.css">
        
        <title>Food Ordering System | Home</title>
    </head>
    <body>
               
        <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="#">
                 <img src="./img/logo.jpg" alt="Image not found!">
        </a>
         <a href="logout.php">Logout</a>
        </nav>

      
        
       

        <a href="myorders.php">My Orders</a>

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
<!---Pratham Code-->
<!-- </div>
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
        </div> -->
    </body>
</html>