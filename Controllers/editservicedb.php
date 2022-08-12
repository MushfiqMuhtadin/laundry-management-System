<?php

require_once('../Model/usersmodel.php');
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
  



    $conn = getConnection();

    $sql = "update services set id='$id',name='$name',description='$description',price='$price' WHERE id='$id'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
?>


        <script>
            alert("user successfully updated ");
        </script>
<?php

         header('location:../Views/laundryman.php');
    } else {
        die(mysqli_error($conn));
    }
} else {
    header('location: ../Views/Login.php');
} ?>