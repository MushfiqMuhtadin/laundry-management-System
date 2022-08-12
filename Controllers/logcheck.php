


<?php
require_once('../Model/usersmodel.php');

session_start();

if(isset($_POST['login'])){
    $email = $_POST['email'];
  $password= $_POST['password'];

    if (empty($email)) {
        $emailerror = 'please enter your email';
    }
    
    
    
    if (empty($password)) {
        $passworderror = 'please enter your password';
    }
    
    
    
    
    include('../Views/Login.php');

}


  
    if(empty($emailerror) &&  empty($passworderror) )
    {
		    
    $conn = getConnection();
    $sql = "select * from users where email='$email' and userpassword='$password'";
    $result = mysqli_query($conn,$sql);
   
    $count = mysqli_num_rows($result);
    // $row = mysqli_fetch_assoc($result);
    if($count == 1 ){
        $row = mysqli_fetch_array($result);
        if($row["usertype"]=="laundryman")
            {   
              $_SESSION['flag'] = true;
             $_SESSION['email'] = $email;
                  
          header("location: ../Views/laundryman.php");
	
	        }
            
            
    }
    else {
        header("Location: ../Views/Login.php?error=Incorect User name or password");
    }


    
    }


    
    
    else{
        
        return false;
        
    
    }
		

	




?>