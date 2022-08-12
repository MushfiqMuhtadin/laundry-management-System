<?php
session_start();

require_once('../Model/usersmodel.php');

if (isset($_GET['editid'])) {

    $conn = getConnection();
    $id = $_GET['editid'];
    $sql = "select * from services where Id='$id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
?>

    <html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="editservice.css" />
        <title>Document</title>
    </head>

    <body>
        <div> 

            <form action="../Controllers/editservicedb.php" method="POST">

                <label for="id">Id</label>
                <input type="text" name="id" placeholder="edit your id" value="<?= $row['id'] ?>">
                <label for="name">Name</label>
                <input type="text" name="name" placeholder="edit your service name" value="<?= $row['name'] ?>">

                <label for="description">Description</label>
                <input type="text" name="description" placeholder="enter your description" value="<?= $row['description'] ?>">

                <label for="price">price</label>
                <input type="text" name="price" placeholder="enter the price"
                 value="<?= $row['price'] ?>">

                <input type="submit" name="submit" value="Update">


            </form>

        </div>

    </body>
<?php
} else {
    header('location: Login.php');
} ?>