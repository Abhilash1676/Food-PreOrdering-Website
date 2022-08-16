<?php include('partials-front/menu.php'); ?>
<?php
//destroy the session
session_destroy();
//redirect to login page
 header('location:'.SITEURL);
?>