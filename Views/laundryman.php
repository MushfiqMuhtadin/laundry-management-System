<?php
session_start();
require_once('../Model/usersmodel.php');
include('header.php');
if (isset($_SESSION['flag'])) {

    $conn = getConnection();
    $email = $_SESSION['email'];
    $sql = "select * from users where email='$email'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    
?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="laundryman2.css">

        <title>UserProfile</title>
    </head>

    <body>
        <main>
            <div class="main-container">
                <div class="color">
                    <div class="profile-pic">
                        <div class="top-pic">
                            <h2>Welcome</h2>


                        </div>
                        <div class="list">
                            <li style="color: black;"> <a id="info" href="profile.php">My Profile </a> </li>
                            <li> <a id="infoPackege" href="package.php">Packege </a> </li>

                        </div>
                        <br>
                        <br>
                        <a href="logout.php" class="myButton">Logout</a>


                    </div>
                </div>
                <div class="right-top">


                    <div class="card">

                        <div class="container">
                            <h1><b>Services</b></h1>
                            <p></p>

                            <a href="services.php" class="viewButton">Edit</a>
                        </div>
                    </div>
                    <div class="card">

                        <div class="container">
                            <h1><b>Inventory</b></h1>
                            <p></p>
                            <a href="inventory.php" class="viewButton">View</a>

                        </div>
                    </div>
                    <div class="card">

                        <div class="container">
                            <h1><b>Orders</b></h1>
                            <p></p>
                            <a href="order.php" class="viewButton">View</a>

                        </div>
                    </div>
                    <div class="card">

                        <div class="container">
                            <h1><b>History</b></h1>
                            <p></p>
                            <a href="history.php" class="viewButton">View</a>

                        </div>
                    </div>




                </div>

            </div>



        </main>



    </body>

    </html>

<?php } else {
    header('location: Login.php');
} ?>