<?php
require_once $_SERVER['DOCUMENT_ROOT']. '/config.php';

// remove all session variables
session_unset();

// destroy the session
session_destroy();

header('Location: ../../index.php');

?>