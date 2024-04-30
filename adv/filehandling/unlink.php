<?php
if (unlink("data.txt") == 1) {
    echo "file deleted: " . $status;
} else {
    echo "file not found.";
}
