<?php include('partials/menu.php');?>
<div class="main-contant">
    <div class="wrapper">
        <h1>Add Admin</h1>
        <br>
        <?php
        if(isset($_SESSION['add'])){
            echo $_SESSION['add'];
            unset($_SESSION['add']);
        }
        ?>
        <form action="" method="POST">
            <table class="tbl-30">
                <tr>
                    <td>Full Name: </td>
                    <td><input type="text" name="full_name" placeholder="Full Name"></td>
                </tr>
                <tr>
                    <td>Username:</td>
                    <td>
                        <input type="text" name="username" placeholder="username">
                    </td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td>
                        <input type="text" name="password" placeholder="password">
                    </td>
                </tr>
                <tr>
                <td colspan="2">
                    <input type="submit" name="submit" value="Add Admin" class="btn-secondary">
                </td>
                </tr>

            </table>

        </form>
    </div>
</div>
<?php include('partials/footer.php'); ?>

<?php
//process the value from form and save it in Database
//Check whether the submit button is clicked or not
if(isset($_POST['submit']))
{
    //1.Get Data from form
    $full_name=$_POST['full_name'];
    $user_name=$_POST['username'];
    $password=md5($_POST['password']);
    //mds function helps in encrypting password.

    //2.SQL Query to save the data to database
    $sql="INSERT INTO tbl_admin SET 
        full_name='$full_name',
        username='$user_name',
        password='$password'
        ";
    //3.execute query and save data in database
    //all this part in included intially at the time of including menu part in each and every section
    $res=mysqli_query($conn,$sql) or die(mysqli_error());
    //4.check weather the data inserted on not
    if($res==TRUE)
    {
        //create a variable to dispay message
        $_SESSION['add']="Admin Added Successfully";
        //Redirect
        header("location:".SITEURL.'admin/manage-admin.php');
    }
    else{
         //create a variable to dispay message
         $_SESSION['add']="Failed to  Add Admin";
         //Redirect
         header("location:".SITEURL.'admin/add-admin.php');
    }


    
        

}
?>