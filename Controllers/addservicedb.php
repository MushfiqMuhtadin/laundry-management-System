<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "laundry";

$conn = mysqli_connect($server, $username, $password, $dbname);

if (isset($_POST['submit'])) {
    if (!empty($_POST['name']) && !empty($_POST['description']) && !empty($_POST['price'])) {

        $name = $_POST['name'];
        $description = $_POST['description'];
        $price = $_POST['price'];

        $query = "insert into services(name,description,price)values('$name','$description','$price')";

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
