<?php include('config/constants.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fullscreen Responsive Login Page</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <section>
        
        <div class="contentBx">
          <div class="formBx">
            <h2>Login</h2>

            <br>
             <?php
              
                if(isset($_SESSION['login']))
                {
                   echo $_SESSION['login'];
                   unset($_SESSION['login']);
                }  
                if(isset($_SESSION['new'])){
                    echo $_SESSION['new'];
                    unset($_SESSION['new']);
                }
            ?>
            <br>
            <form action="" method="POST">
            <div class="inputBx">
                    <span>UserType</span>
                    <input type="text" name="usertype">
                </div>
                <div class="inputBx">
                    <span>UserName</span>
                    <input type="text" name="username">
                </div>
                <div class="inputBx">
                    <span>Password</span>
                    <input type="password" name="password">
                </div>
                <div class="inputBx">
                   <input type="submit" value="SIGN IN" name="submit">
                </div>
                <div class="inputBx">
                   <p>Don't have an account? <a href='http://localhost/food-order/signup.php'>SIGN UP</a></p>
                </div>
            </form>
          </div>
        </div>
    <section>
</body>
</html>


<?php 

    //Check whether the Submit Button is Clicked or NOt
    if(isset($_POST['submit']))
    {
        //Process for Login
        //1. Get the Data from Login form
        // $username = $_POST['username'];
        // $password = md5($_POST['password']);
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $raw_password = md5($_POST['password']);
        $password = mysqli_real_escape_string($conn, $raw_password);
        $user_type=$_POST['usertype'];
        //2. SQL to check whether the user with username and password exists or not
        $sql = "SELECT * FROM tbl_admin WHERE username='$username' AND password='$password'";

        //3. Execute the Query
        $res = mysqli_query($conn, $sql);

        //4. COunt rows to check whether the user exists or not
        $count = mysqli_num_rows($res);

        if($count==1)
        {
            // //User AVailable and Login Success
            // $_SESSION['login'] = "<div class='success'>Login Successful.</div>";
            // $_SESSION['user'] = $username; //TO check whether the user is logged in or not and logout will unset it

            // //REdirect to HOme Page/Dashboard
            if($user_type=="customer"){
            header('location:'.SITEURL.'welcome.php');
            }
            else if($user_type=="admin")
            {
                header('location:'.SITEURL.'admin/index.php');
            }
            else{
                $_SESSION['login'] = "<div class='success '>Invalid Login Details</div>";
            }

        }
        else
        {
            //User not Available and Login FAil
         $_SESSION['login'] = "<div class='error'>Invalid Login Details</div>";
            header('location:'.SITEURL.'signin.php');
        }


    }

?>