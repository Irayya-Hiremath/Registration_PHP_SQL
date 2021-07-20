<?php
    if(!isset($_GET['id'])){
    }
    require_once('db.php');
    $id=$_GET['id'];
    $sql="SELECT * FROM `product` where id = $id";
    $result=$cons->query($sql);
    if($result->num_rows !=1){
        // die("id is not in db ");
    }
    $data=$result->fetch_assoc();
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
      <div class="container">
          <form class="form" action="./submit.php" method="POST">
          <h3>Edit Form</h3>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">product</label>
                    <input class="form-control" name="pname" id="exampleFormControlInput1" placeholder="product" value=<?= $data['name']?>>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">price</label>
                    <input type="number" class="form-control" name="pprice"  id="exampleFormControlInput1" placeholder="price"value=<?= $data['price']?>>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">description</label>
                    <textarea class="form-control" name="pdescription"  id="exampleFormControlTextarea1" rows="3" value=<?= $data['description']?>></textarea>
                </div>
                <br><br>
                <button type="submit" value="submit" name="submitForm" class="btn btn-primary btn-block" required > Submit </button>


         </form>   
</div>


    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>