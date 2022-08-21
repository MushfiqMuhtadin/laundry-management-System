<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="service3.css">
    <title>Document</title>
</head>

<body>

    <center>
        <button>
            <a href="addservice.php">Add Service</a>
        </button>
    </center>


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
        $output = '<table class="styled-table"><tr> <th >ID</th> <th>userame</th>
        <th>list</th> <th>title</th> <th>Description</th> <th>image</th> <th>Action</th> </</tr>';
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {


                $output .= "<tr><td>{$row["id"]}</td>
			        <td>{$row["username"]}</td>
			        <td>{$row["list"]}</td>
			        <td>{$row["I_title"]}</td>
			        <td>{$row["I_description"]}</td>
			        <td>{$row["I_image"]}</td>
			        
			        <td><button><a href='deleteservice.php?deleteid={$row["id"]}'>Delete</a></button>
			        <button ><a href='editservice.php?editid={$row["id"]}'>Edit</a></button></td>
			       
			        </tr>";
            }
            $output .= '</table>';
        } else
            echo "O results";
    }
    $conn->close();
    echo $output;
    ?>

    <br><br><br> 
    <center>
        <button> <a href="laundryman.php">Return</a>
        </button>
    </center>


</body>

</html>