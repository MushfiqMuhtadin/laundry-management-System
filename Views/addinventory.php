<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>addservice</title>
    <link rel="stylesheet" href="addservicee.css">
</head>

<body>
    <center>
        <h2>please add your service</h2>
    </center> <br><br><br>
    <p></p>

    <div>
        <form action="../Controllers/addinventorydb.php" method="POST">

            <label for="name">Name</label>
            <input type="text" name="name" placeholder="enter name">

            <label for="quantity">Quantity</label>
            <input type="text" name="quantity" placeholder="enter quantity">

            <input type="submit" name="submit" value="submit">


        </form>


    </div>
    <button> <a href="laundryman.php">Return</a>
    </button>
    <br>

</body>

</html>