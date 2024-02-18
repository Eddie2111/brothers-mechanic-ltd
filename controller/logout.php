<?php
// for logout
session_start();
session_destroy();
header ("Location: ../views/index.php");
?>