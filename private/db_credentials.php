<?php

// Keep database credentials in a seperate file
// 1. Easy to exclude this file from source code managers
// 2. unique credentials on developement and production servers
// 3. unique credentials if working with multiple developers

define("DB_SERVER", "localhost");
define("DB_USER", "wnc-birds");
define("DB_PASS", "pass");
define("DB_NAME", "wnc-birds");


?>