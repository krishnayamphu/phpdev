<?php
// 86400 = 1 day
setcookie("admin", "admin", time() + (86400 * 30)); 

echo "cookie set successfully.";