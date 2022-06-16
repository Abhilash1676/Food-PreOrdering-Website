<?php include('partials/menu.php');?>
<!--Main-contant starts-->
<div class="main-content">
        <div class="wrapper">
                <h1>Manage Admin</h1>
                <br>
                <?php
                 if(isset($_SESSION['add']))
                 {
                         echo $_SESSION['add'];
                         unset($_SESSION['add']);
                 }
                 if(isset($_SESSION['delete']))
                 {
                         echo $_SESSION['delete'];
                         unset($_SESSION['delete']);
                 }
                 if(isset($_SESSION['update']))
                 {
                         echo $_SESSION['update'];
                         unset($_SESSION['update']);
                 }
                 if(isset($_SESSION['user-not-found']))
                 {
                         echo $_SESSION['user-not-found'];
                         unset($_SESSION['user-not-found']);
                 }
                 if(isset($_SESSION['no-match']))
                 {
                         echo $_SESSION['no-match'];
                         unset($_SESSION['no-match']);
                 }
                 if(isset($_SESSION['password-changed']))
                 {
                         echo $_SESSION['password-changed'];
                         unset($_SESSION['password-changed']);
                 }
                 
                 
                ?>
                <br><br>
                <!--button to add admin-->
                <a href="add-admin.php" class="btn-primary">Add Admin</a>
                <br><br>
            <table class="tbl-full">
                    <tr>
                            <th>S.NO</th>
                            <th>Full Name</th>
                            <th>UserName</th>
                            <th>Actions</th>
                    </tr>
                    <?php
                    //query to get all admin
                    $sql="select * FROM tbl_admin";
                    //execute query
                    $res=mysqli_query($conn,$sql);
                    //check whether query executed or not 
                    if($res==TRUE)
                    {
                      //count no.of rows
                      $count=mysqli_num_rows($res);
                      if($count>0)
                      {
                        $sn=1;
                         while($rows=mysqli_fetch_assoc($res))
                         {
                            $id=$rows['id'];
                            $full_name=$rows['full_name'];
                            $user_name=$rows['username'];
                          ?>
                          <tr>
                            <td><?php echo $sn?></td>
                            <td><?php echo $full_name?></td>
                            <td><?php echo $user_name?></td>
                            <td>
                                    <a href="<?php echo SITEURL;?>admin/update-admin.php?id=<?php echo $id; ?>" class="btn-secondary">Update Admin</a>
                                    <a href="<?php echo SITEURL;?>admin/delete-admin.php?id=<?php echo $id; ?>" class="btn-danger">Delete Admin</a>
                                    <a href="<?php echo SITEURL;?>admin/update-password.php?id=<?php echo $id; ?>" class="btn-primary">Change Password</a>
                            </td>
                         </tr>
                         <?php
                            $sn=$sn+1;
                         }
                      }
                      else{
                              //no data in database
                      }
                    }
                    ?>
                    
                    
            </table>
        </div>
</div>
<!--Main contant ends-->




<?php include('partials/footer.php'); ?>
        