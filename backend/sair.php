<?php
session_start();
unset($_SESSION['nameemail']);
unset($_SESSION['namesenha']);
header("Location: ../cinema.html");
?>