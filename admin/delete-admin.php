<?php
include('../config/constants.php');
//1.get the ID of Admin to be deleted
echo $id=$_GET['id'];
//2.Create SQL Query to delete admin
$sql="DELETE  from tbl_admin where id=$id";
//3.Execute query
$res=mysqli_query($conn,$sql);
if($res==true)
{
    $_SESSION['delete']="<div class='success'> Admin Deleted Successfully</div>";
    header('location:'.SITEURL.'admin/manage-admin.php');
}
else{
    $_SESSION['delete']= "<div class='error'>Failed to  Delet Admin.Try AGAIN</div>";
    header('location:'.SITEURL.'admin/manage-admin.php');
}
?>