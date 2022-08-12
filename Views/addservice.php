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

    <div>
        <form action="../Controllers/addservicedb.php" method="POST">

            <label for="name">Name</label>
            <input type="text" name="name" placeholder="enter your service name">

            <label for="description">Description</label>
            <input type="text" name="description" placeholder="enter your description">

            <label for="price">price</label>
            <input type="text" name="price" placeholder="enter the price">

            <input type="submit" name="submit" value="submit">


        </form>


    </div>
    <button> <a href="laundryman.php">Return</a>
    </button>
</body>

</html>