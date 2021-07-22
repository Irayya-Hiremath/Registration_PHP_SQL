<?php

require_once('db.php');

//  if its true go on below line 

if(isset($_POST['submitForm'])){
    $name=$_POST['pname'];
    $price=$_POST['pprice'];
    $description=$_POST['pdescription'];
    $imagee=$_FILES['images']['name'];

    $sql= "INSERT INTO `product`(`name`, `price`, `description`,`image`)
    VALUES ('$name', '$price','$description','$imagee')"; 

    //   to connect db and insert data below line

    // $insert_sql =mysqli_query($cons,$sql);   

    // if ($insert_sql){
    //     echo"added to data base";
    // }else{ 
    //     echo "no submit";
    // }



    // 2nd method
    if($cons->query($sql)===TRUE){
        ?>
        <script> 

        alert("added to data base")
        location.replace("index2.php")
        </script>
        <?php
    }else{
        echo"something wrong";
    }
    

}else{ 
    echo "no submit";
};
?>

<?php
    if(isset($_FILES['images'])){
        $file_name=$_FILES['images']['name'];
        $file_size=$_FILES['images']['size'];
        $file_tmp=$_FILES['images']['tmp_name'];
        $file_type=$_FILES['images']['type'];


            if(move_uploaded_file($file_tmp, "uploads/". $file_name)){
                ?>
                <script> alert("file uploaded") </script>

                <?php

            }else{
                ?>
                <script> alert("file not uploaded") </script>

                <?php
            }



    }

?>
