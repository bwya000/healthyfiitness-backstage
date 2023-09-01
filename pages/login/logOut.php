<?php
session_start();

session_destroy();
echo "<script>alert('您已登出!'); location.href = './login.php';</script>";
?>