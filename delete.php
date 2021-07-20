<?php
require_once('db.php');

if (isset($_GET['id'])){
    $id=$_GET['id'];
    $sql="DELETE FROM `product` WHERE id = $id";

    if($cons->query($sql)===TRUE){
        ?>
        <script> 

        alert("Data Deleted");
        location.replace("show.php");

        </script>;
        <?php
    }else{
        echo"something wrong";
    }
}else{
    die('id not provided');
}

?>