<?php
session_start();

//unset all session variable
session_unset();

echo "session unset successfully.";