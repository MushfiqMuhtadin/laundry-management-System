<?php

$con = mysqli_connect("localhost","root","","laundry");

if(!$con){
    die('Connection Failed'. mysqli_connect_error());
}
