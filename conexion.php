<?php
function conectar(){
    $host="localhost";
    $user="refacc94_refacc94_sgie";
    $pass="mm3]+rF38JyZS0";

    $bd="refacc94_sgie";

    $con=mysqli_connect($host,$user,$pass);

    mysqli_select_db($con,$bd);

    return $con;
}
?>
