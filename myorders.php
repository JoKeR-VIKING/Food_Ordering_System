<?php
    $conn = new mysqli("localhost:3306", "root", "", "food_ordering_system");
    $sql = sprintf("SELECT * FROM Orders WHERE `email` = '%s'", $_COOKIE['userEmail']);

    $result = $conn -> query($sql);
?>

<html>
    <head>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/navbar.css">
        <title>Food Ordering System | My Order</title>
    </head>
    <body>

    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="#">
                 <img src="./img/logo.jpg" alt="Image not found!">
        </a>
         <a href="logout.php">Logout</a>
        </nav>

       
       
        <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Sr No</th>
      <th scope="col">ID</th>
      <th scope="col">ORDER</th>
      <th scope="col">STATUS</th>
    </tr>
  </thead>
  <tbody>
  <?php
                    while ($row = $result -> fetch_row())
                    {
                        ?>
                        <tr>
                            <th scope="row">2</th>
                            <td><?php echo $row[0]; ?></td>
                            <td><?php echo $row[2]; ?></td>
                            <td><?php echo $row[3]; ?></td>
                        </tr>
                <?php
                    }
                ?>
    
  </tbody>
</table>
        <!---Pratham Code-->

        <!-- <table>
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
        </table> -->
    </body>
</html>
