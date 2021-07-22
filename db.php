<?php

$server="localhost";
$user="root";
$pass="";
$db="crud";



$cons= mysqli_connect($server,$user,$pass,$db);

if($cons){
    ?>
    <script>
        // alert(" data base conncetion sucessful")
    </script>


    <?php
}
else{
    ?>
    <script>
        alert("data base no conncetion") 
    </script>


    <?php

}





?>