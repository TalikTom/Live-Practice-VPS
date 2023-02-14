<?php
session_start();

if(!$_SESSION['auth']){
    header('location: /');
}


require 'views/protected.view.php';







