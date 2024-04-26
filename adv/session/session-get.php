<?php
// Start the session
session_start();


//session get
if (isset($_SESSION['user'])) {
    echo "Username: " . $_SESSION['user'];
} else {
    echo "session user is not set";
}
