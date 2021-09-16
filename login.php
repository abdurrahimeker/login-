<?php
try {
    
    $login = mysqli_connect("localhost","root","","loginsayfasi");
    echo "connected";
} catch (Exception $e) {
    echo $e;
}
?>