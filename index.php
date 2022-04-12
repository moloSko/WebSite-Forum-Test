<?php
require "db.php";

if(isset($_SESSION['logged_user']))
{
    header("Location:".$site_url."/razdel/Forum");
}
else
{
    header("Location:".$site_url."/auth/auth");
}
?>
