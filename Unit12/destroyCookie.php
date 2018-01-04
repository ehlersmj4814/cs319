<?php
setcookie("fname", "", time() - 3600, "/");
setcookie("lname", "", time() - 3600, "/");
header('Location: index1.php');
?>