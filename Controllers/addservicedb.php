<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "laundry";

$conn = mysqli_connect($server, $username, $password, $dbname);

if (isset($_POST['submit'])) {
    if (!empty($_POST['username']) &&!empty($_POST['list']) && !empty($_POST['title']) &&
     !empty($_POST['description']) && !empty($_POST['image'])) {

        $username = $_POST['username'];
        $list = $_POST['list'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        $image = $_POST['image'];

        $query = "insert into services(username,list,I_title,I_description,I_image)values('$username','$list','$title','$description','$image')";

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
