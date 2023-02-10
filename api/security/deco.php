<?php
require_once __DIR__. '/../../config.php';

// remove all session variables
session_unset();

// destroy the session
session_destroy();

header('Location: ../../index.php');

?>