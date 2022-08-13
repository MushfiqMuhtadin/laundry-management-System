<?php
session_start();
require_once('../Model/usersmodel.php');
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
        <title>Order</title>
        <link rel="stylesheet" href="order1.css">
    </head>

    <body>
        <center>
            <h1>Customer Orders</h1>
        </center>
        <br><br><br>
        <table id="customers">
            <tr>
                <th>Order ID</th>
                <th>Order description</th>
                <th>Cost</th>
                <th>Action</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Clean the clothes</td>
                <td>500TK</td>
                <td>
                    <input type="button" onclick="confirmedFunction()" class="myButton" id="button" value="Confirm">

                    <input type="button" onclick="checkoutFunction()" class="myButton2" id="button" value="Cancel">
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Iron the clothes</td>
                <td>300TK</td>
                <td>
                    <input type="button" onclick="confirmedFunction()" class="myButton" id="button" value="Confirm">

                    <input type="button" onclick="checkoutFunction()" class="myButton2" id="button" value="Cancel">
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>Steam the Suits</td>
                <td>1000TK</td>
                <td>
                    <input type="button" onclick="confirmedFunction()" class="myButton" id="button" value="Confirm">

                    <input type="button" onclick="checkoutFunction()" class="myButton2" id="button" value="Cancel">
                </td>
            </tr>
            <tr>
                <td>4</td>
                <td>Wash the bed sheets</td>
                <td>900TK</td>
                <td>
                    <input type="button" onclick="confirmedFunction()" class="myButton" id="button" value="Confirm">

                    <input type="button" onclick="checkoutFunction()" class="myButton2" id="button" value="Cancel">
                </td>
            </tr>
            <tr>
                <td>5</td>
                <td>Deep wash curtons</td>
                <td>1500TK</td>
                <td>
                    <input type="button" onclick="confirmedFunction()" class="myButton" id="button" value="Confirm">

                    <input type="button" onclick="checkoutFunction()" class="myButton2" id="button" value="Cancel">
                </td>
            </tr>

        </table>
        <br>
        <center>
            <a href="laundryman.php" class="myButton">Return Back</a>
            <a href="order.php" class="myButton">Refresh</a>

        </center>

        <div class="thanks" for="thanks" id="content"> </div>
        <div class="confirmed" for="confirmed" id="confirmed"> </div>


        <script src="../jquery.js"></script>

        <script>
            function checkoutFunction() {
                $('#content').load('cancel.php');
            }

            function confirmedFunction() {
                $('#confirmed').load('confirm.php');
            }
        </script>
    </body>

    </html>

<?php } else {
    header('location: Login.php');
} ?>