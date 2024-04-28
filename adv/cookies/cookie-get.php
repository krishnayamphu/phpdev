<?php

if (isset($_COOKIE['client'])) {
    echo "Client Name: " . $_COOKIE['client'];
} else {
    echo "cookie is not set.";
}
