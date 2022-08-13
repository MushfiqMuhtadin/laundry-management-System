

    <?php
    require_once('../Model/usersmodel.php');
    $conn = getConnection();
    $q = "SELECT * from inventory";
    $result = $conn->query($q);
    ?>



    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="inventory1.css">
        <title>Packege</title>
    </head>

    <body>
        <br><br>
        <center>
            <button>
                <a href="addinventory.php">Add Items</a>
            </button>
        </center>
        <br>

        <div class="bottom-middle">
            <?php
            $output = '<div class="packge-container"  border="1" width=100%>';
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $output .= "
                                    <div>
                                     
                                    <h3>Name-{$row["name"]}</h3>
                                    <h3>Quantity-{$row["quantity"]}</h3>
			        <button><a href='deleteinventory.php?deleteid={$row["id"]}'>Delete</a></button>
                                    
                                    </div>";
                }
                $output .= '</div>';
            } else
                echo "O results";
            $conn->close();
            echo $output;
            ?>





            <br> <br>
            
            <center>
                <button> <a href="laundryman.php">Return</a>
                </button>
            </center>


    </body>

    </html>

