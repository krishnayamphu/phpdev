<?php

session_start();

unset($_SESSION['test']);

echo "test session var unset successfully";