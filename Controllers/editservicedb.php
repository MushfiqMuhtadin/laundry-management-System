<?php

require_once('../Model/usersmodel.php');
if (isset($_POST['submit'])) {
    
    $id= $_POST['id'];
    $username = $_POST['username'];
    $list = $_POST['list'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $image = $_POST['image'];
  



    $conn = getConnection();

    $sql = "update services set id='$id',username='$username',list='$list',I_title='$title',I_description='$description',I_image='$image' WHERE id='$id'";
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