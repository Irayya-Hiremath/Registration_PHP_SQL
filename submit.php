<?php

require_once('db.php');

//  if its true go on below line 

if(isset($_POST['submitForm'])){
    $name=$_POST['pname'];
    $price=$_POST['pprice'];
    $description=$_POST['pdescription'];

    // echo " Name:$name <br> Price:$price <br> Description: $description";
    $sql= "INSERT INTO `product`(`name`, `price`, `description`) 
    VALUES ('$name', '$price','$description')"; 

    //   to connect db and insert data below line

    // $insert_sql =mysqli_query($cons,$sql);   

    // if ($insert_sql){
    //     echo"added to data base";
    // }else{ 
    //     echo "no submit";
    // }

    // 2nd method
    if($cons->query($sql)===TRUE){
        echo"added to data base";
    }else{
        echo"something wrong";
    }

}else{ 
    echo "no submit";
};

// else{
    



// }


?>