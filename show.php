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
      <div class="jubotron">
          <h1 class="text-center">Product Company</h1>
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
                            echo "</tr>";


                            }
                        }
                 
            ?>
          </table>
      </div>
 

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>