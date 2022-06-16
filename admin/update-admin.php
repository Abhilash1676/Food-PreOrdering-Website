<?php include('partials/menu.php')?>
<div class="main-content">
    <div class="wrapper">
        <h1>Update Admin</h1> 
        <br><br>
        <?php
        //get id 
          $id=$_GET['id'];
          //
          $sql="SELECT * FROM tbl_admin WHERE id=$id";
          //execute the query
          $res=mysqli_query($conn,$sql);
          if($res==true)
          {
              //check whether the data is available or not
              $count=mysqli_num_rows($res);
              if($count==1)
              {
                  echo "Admin Available";
              }
              else{
                  //redirect to manage-admin page
                  header('location:'.SITEURL.'admin/manage-admin.php');
              }

          }

        ?>
        <form action="" method="POST">
            <table class="tbl-30">
             <tr>
                 <td> Update Full Name: </td>
                 <td>
                     <input type="text" name="full_name" placeholder="Enter Name">
                 </td>
             </tr>
             <tr>
                 <td>UpdateUserName: </td>
                 <td>
                     <input type="text" name="username" placeholder="userName">
                 </td>
             </tr>
             <tr>
                 <td colspan="2">
                     <input type="hidden" name='id' value="<?php echo $id;?>">
                     <input type="submit" name="submit" value="update Admin" class="btn-secondary">
                 </td>
             </tr>
             
            </table>
        </form>
    </div>
</div>
<?php

if(isset($_POST['submit']))
{
      $id=$_POST['id'];
      $full_name=$_POST['full_name'];
      $username=$_POST['username'];
      $sql="UPDATE tbl_admin SET 
            full_name='$full_name',
             username='$username'
             WHERE id='$id'
             ";
     $res=mysqli_query($conn,$sql);

     if($res==true)
     {
      $_SESSION['update']="<div class='success'> Admin updated Succesfully.</div>";
      header('location:'.SITEURL.'admin/manage-admin.php');
     }
     else{
        $_SESSION['update']="<div class='error'> Failed to Update .</div>";
        header('location:'.SITEURL.'admin/manage-admin.php');
     }
}

?>
<?php include('partials/footer.php');?>