<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="service2.css">
    <title>Document</title>
</head>

<body>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "laundry";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed:" . $conn->connect_error);
    } else {
        $q = "SELECT * from services";
        $result = $conn->query($q);
        $output = '<table class="styled-table" border="1" ><tr><th >ID</th><th>Name</th> <th>Description</th> <th>Price</th>
        </tr>';
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {


                $output .= "<tr><td>{$row["id"]}</td>
			        <td>{$row["name"]}</td>
			        <td>{$row["description"]}</td>
			        <td>{$row["price"]}</td>
			        
			        </tr>";
            }
            $output .= '</table>';
        } else
            echo "O results";
    }
    $conn->close();
    echo $output;
    ?>

    <button>
        <a href="laundryman.php">Return</a>
    </button>

</body>

</html>