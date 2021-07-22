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
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
          <a class="navbar-brand" href="#">Edit Form</a>
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

      <div class="container">
          <form class="form" action="./modify.php?id=<?=$id ?>" method="POST">
          <br>

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
                    <input class="form-control h-4 " name="pdescription"  id="exampleFormControlTextarea1" rows="3" value=<?= $data['description']?>></input>
                </div>
                <!-- <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">image</label>
                    <input type="file" name="images" id="fileToUpload" value=<?= $data['image']?> >
                    <input type="submit" value="Upload Image" name="submit">
                </div> -->
                <br><br>
                <input type="submit" value="submit" name="editForm" class="btn btn-primary btn-block" required ></input>
         </form>   
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>