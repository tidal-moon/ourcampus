<?php
session_start();
$_SESSION[selectItem] = 2;
header("Location: ../index.php?selId=2");
 ?>