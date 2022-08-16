<?php include('config/constants.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="css/signup.css">
</head>
<body>
    <section>
        
    
        <div class="contentBx">
          <div class="formBx">
            <h2>Create account</h2>
           
            <form action="" method="POST">
            <div class="inputBx">
                    <span>Usertype</span>
                    <input type="text" name="usertype">
                </div>
                <div class="inputBx">
                    <span>UserName</span>
                    <input type="text" name="username">
                </div>
                

                <div class="inputBx">
                    <span>Create Password</span>
                    <input type="password" name="cre_password">
                </div>
                <div class="inputBx">
                    <span>Confirm Password</span>
                    <input type="password" name="con_password">
                </div>

                <div class="inputBx">
                   <input type="submit" value="SIGN UP" name="submit">
                </div>
               
            </form>
          </div>
        </div>
    <section>
</body>
</html>


<?php
//process the value from form and save it in Database
//Check whether the submit button is clicked or not
if(isset($_POST['submit']))
{
    //1.Get Data from form
    $user_type=$_POST['usertype'];
    $user_name=$_POST['username'];
    $cre_password=md5($_POST['cre_password']);
    $con_password=md5($_POST['con_password']);
    //mds function helps in encrypting password.

    // $check=strcmp($pass,$repass);
       

    // if(strlen($username)===0)
    // {
    //     header("Location:signup.php?error=username is required");
    //     exit();
    // }
    // if(strlen($email)===0  )
    // {
    //     header("Location:signup.php?error=email is required");
    //     exit();
    // }
    // if(strlen($repass)===0  )
    // {
    //     header("Location:signup.php?error=Re-enter Password");
    //     exit();
    // }
    // if($check!== 0  )
    // {
    //     header("Location:signup.php?error=Passwords dont match");
    //     exit();
    // }

    //2.SQL Query to save the data to database
    $sql="INSERT INTO tbl_admin SET 
        full_name='$user_type',
        username='$user_name',
        password='$cre_password'
        ";
    //3.execute query and save data in database
    //all this part in included intially at the time of including menu part in each and every section
    $res=mysqli_query($conn,$sql) or die(mysqli_error());
    //4.check weather the data inserted on not
    if($res==TRUE)
    {
        //create a variable to dispay message
        $_SESSION['new']="<div class='success'>Account Created Successfully</div>";
        //Redirect
        header("location:".SITEURL.'signin.php');
    }
    else{
         //create a variable to dispay message
         $_SESSION['new']="<div class='error'>Failed to Create an Account</div>";
         //Redirect
         header("location:".SITEURL.'signin.php');
    }
}
?>