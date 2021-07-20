<?php

$server="localhost";
$user="root";
$pass="";
$db="crud";



$cons= mysqli_connect($server,$user,$pass,$db);

if($cons){
    ?>
    <script>
        alert("conncetion sucessful")
    </script>


    <?php
}
else{
    ?>
    <script>
        alert(" no conncetion") 
    </script>


    <?php

}





?>