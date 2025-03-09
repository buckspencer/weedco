<?php
// Load WordPress environment
require_once('wp-load.php');

// Set WordPress site URL to localhost
update_option('siteurl', 'http://localhost:8000');
update_option('home', 'http://localhost:8000');
echo "Site URL set to localhost:8000 successfully!\n";
?> 