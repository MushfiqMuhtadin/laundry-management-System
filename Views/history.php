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
        <link rel="stylesheet" href="history.css">
    </head>

    <body>
        <center>
            <h1>Customer's History</h1>
        </center>
        <br><br><br>
        <table id="customers">
            <tr>
                <th>SL</th>
                <th>Order history</th>
                <th>Paid</th>
                <th>Date</th>
            
            </tr>
            <tr>
                <td>1</td>
                <td>Mr Rahim Clean the clothes</td>
                <td>500tk</td>
                <td>27-5-2021</td>
                
            </tr>
            <tr>
                <td>2</td>
                <td>Mr karim deep washed the clothes</td>
                <td>900tk</td>
                <td>28-5-2021</td>
                
            </tr>
            <tr>
                <td>3</td>
                <td>Ms Rahima Clean the curtons</td>
                <td>1500tk</td>
                <td>29-5-2021</td>
                
            </tr>
            <tr>
                <td>4</td>
                <td>Mr kuddus Iron the clothes</td>
                <td>200tk</td>
                <td>30-5-2021</td>
                
            </tr>
            <tr>
                <td>5</td>
                <td>Mr Nouroj vaccum cleaned his suites</td>
                <td>1000tk</td>
                <td>1-6-2021</td>
                
            </tr>
           
            <tr>
                <td>6</td>
                <td>Mr Noman iron his clothes</td>
                <td>300tk</td>
                <td>2-6-2021</td>
                
            </tr>
           
            <tr>
                <td>7</td>
                <td>Mr Mohim  cleaned his suites</td>
                <td>1200tk</td>
                <td>3-6-2021</td>
                
            </tr>
           
            <tr>
                <td>8</td>
                <td>Mr kabila vaccum cleaned his suites</td>
                <td>1800tk</td>
                <td>4-6-2021</td>
                
            </tr>
           
            <tr>
                <td>9</td>
                <td>Mr Salamn cleaned his clothes</td>
                <td>400tk</td>
                <td>5-6-2021</td>
                
            </tr>
           
            <tr>
                <td>10</td>
                <td>Mr rahat ironed his suites</td>
                <td>200tk</td>
                <td>6-6-2021</td>
                
            </tr>
           
           

        </table>
        <br>
        <center>
            <a href="laundryman.php" class="myButton">Return Back</a>
            <a href="history.php" class="myButton">Refresh</a>

        </center>

        
    </body>

    </html>

<?php } else {
    header('location: Login.php');
} ?>