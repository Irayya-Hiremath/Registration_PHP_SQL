<?php

require_once('db.php');
$sql="SELECT * FROM `product`";
$result=$cons->query($sql);

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>crud</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
          <a class="navbar-brand" href="#">Products List</a>
          <br>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="http://localhost/login_page/index2.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="http://localhost/login_page/show.php">All Products</a>
              </li>
            </ul>
           </div>
      </div>
  </nav>

 <div class="jubotron">
    <br>
  
 </div>
 <div class="container">
          <table class="table table-striped table-borderred">
               <tr> 
                   <th>ID#</th>
                   <th>Name</th>
                   <th>Price</th>
                   <th>Description</th>
              </tr>

         <?php
                        if($result->num_rows >0){
                            while($row=$result->fetch_assoc()){
                            echo "<tr>";
                            echo "<td>" .$row['id']."</td>";
                            echo "<td>" .$row['name']."</td>";
                            echo "<td>" .$row['price']."</td>";
                            echo "<td>" .$row['description']."</td>";
                            echo "<td>";

                            echo "<div class='btn-group'>";
                            echo "<a class='btn btn-secondary' href='./edit.php?id=" .$row['id']."'>Edit</a>";
                            echo "<a class='btn btn-danger' href='./delete.php?id=".$row['id']."'>Delete</a>";
                            echo "</div>";
                            echo"</td>";
                            echo "</tr>";
                            }
                        }
            ?>
          </table>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>