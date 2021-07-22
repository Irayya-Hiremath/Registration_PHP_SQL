<?php

require_once('db.php');

if (isset($_GET['id'])&& isset($_POST['editForm'])){
                $id=$_GET['id'];
                $name=$_POST['pname'];
                $price=$_POST['pprice'];
                $description=$_POST['pdescription'];
// image

                // $imagee=$_POST['images'];
// image

                // echo"from edit page";
            $sql="UPDATE `product` SET 
            `name`=' $name',
            `price`='$price',
            `description`='$description' 
            -- `image`='$imagee'
            WHERE id=$id";

            if($cons->query($sql)===TRUE){
                // echo"modified  data  ";
                ?>
                <script> 
        
                alert("Data Modified");
                location.replace("show.php");
        
                </script>;
                <?php
            }else{
                echo"something wrong";
            }

}else{
    echo"invalid";
}



?>