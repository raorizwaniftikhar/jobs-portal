<?php

session_start(); 
// remove all session variables
session_unset(); 

// destroy the session 
session_destroy();

//It is important to notice that header() must be called before any actual output is sent
header ("location:../index.php");

?>
