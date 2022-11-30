<?php

$server = "localhost";
$user = "root";
$password= "";
$db = "sign";

$con = mysqli_connect($server,$user,$password,$db);

if($con)
{
    ?>
    <!-- <script>alert("connection succ")</script> -->

    <?php
}
else{
    
    ?>
    <script>alert("connection not  succ")</script>
    
    <?php
}

?>