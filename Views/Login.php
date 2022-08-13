<!DOCTYPE html>
<html>

<head>
    <title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="../Views/Login.css">
</head>

<body>
    <h2>Welcome! Please Login</h2><br>
    <div class="login">

        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p> <br>
        <?php } ?>


        <form id="login" action="../Controllers/logcheck.php" method="post">
            <label>
                <b>Email
                </b>
            </label><br>

            <input type="text" name="email" id="email" placeholder="Email">
            <br>

            <?php if (isset($emailerror)) { ?>

                <span style="color: black;"> <?php echo $emailerror; ?></span> <br>

            <?php  } ?>


            <br>
            <label>
                <b>Password
                </b>
            </label>

            <input type="Password" name="password" id="password" placeholder="Password">
            <br>

            <?php if (isset($passworderror)) { ?>


                <span style="color: black;"><?php echo $passworderror; ?></span> <br>



            <?php  } ?>


            <br><br>
            <input type="submit" id="log" name="login" value="Login">

            <br><br>


            <!-- <p class="sign-up-link">Don't Have an account..? <a href="Signup.php" class="Sign-Up">Sign Up</a> here</p> -->

        </form>
   
    </div>
</body>

</html>