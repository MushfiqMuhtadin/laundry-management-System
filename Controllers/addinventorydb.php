<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "laundry";

$conn = mysqli_connect($server, $username, $password, $dbname);

if (isset($_POST['submit'])) {
    if (!empty($_POST['name']) && !empty($_POST['quantity'])) {

        $name = $_POST['name'];
        $quantity = $_POST['quantity'];

        $query = "insert into inventory(name,quantity)values('$name','$quantity')";

        $run = mysqli_query($conn, $query);

        if ($run) {
            header('location: ../Views/laundryman.php');
        } else {
            echo "not ok";
        }
    } else {
        echo "i'm sorry";
    }
}
