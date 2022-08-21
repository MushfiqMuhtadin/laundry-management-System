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

            <label for="username">Userame</label>
            <input type="text" name="username" placeholder="enter your user name">

            <label for="list">List</label>
            <input type="text" name="list" placeholder="enter your list">

            <label for="title">title</label>
            <input type="text" name="title" placeholder="enter the title">

            <label for="description">Description</label>
            <input type="text" name="description" placeholder="enter your descriprion">

            <label for="image">Image</label>
            <input type="text" name="image" placeholder="enter image">

            <input type="submit" name="submit" value="submit">


        </form>


    </div>
    <button> <a href="laundryman.php">Return</a>
    </button>
</body>

</html>