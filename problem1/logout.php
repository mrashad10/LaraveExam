<?php

// Start the session
session_start();

// remove all session variables
session_unset();

// destroy the session
session_destroy();

// Redirect to login page to re-login if needed
header('Location: login.php');
