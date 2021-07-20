<?php
 
session_start();
if (!isset( $_SESSION['username'])){
    header('location:logins.php');
}

if (!isset( $_SESSION['email'])){
    header('location:logins.php');
}
// if (!isset( $_SESSION['id'])){
//     header('location:logins.php');
// }
// include "upload.php";


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <link rel="stylesheet" href="style.css">

</head>
<body>
<div class="container ">
        <form action="" method="" class="mt">

                <table class="table text-center">
                <thead>
                    <tr>
                    <th scope="col">id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td><h3> <?php echo $_SESSION['username']; ?> </h3></td>
                    <td><h3> <?php echo $_SESSION['email']; ?> </h3></td>
                    </tr>
                    <tr>
                </tbody>
                </table>
        </form>

       
        <!-- <?php
        echo $_SESSION['username'];
        echo $_SESSION['email'];
        ?> -->
        
        <button type="submit" name="submit" class="btn btn-primary w-8 " required ><a href="logout.php" class="text-white">Log out </a> </button>
</div>
</body>
</html>