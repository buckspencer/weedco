<?php
// Load WordPress environment
require_once('wp-load.php');

// Set WordPress site URL to ngrok
update_option('siteurl', 'https://14b7-2601-500-8702-7770-b464-dc0-ab5f-ef1c.ngrok-free.app');
update_option('home', 'https://14b7-2601-500-8702-7770-b464-dc0-ab5f-ef1c.ngrok-free.app');
echo "Site URL set to ngrok URL successfully!\n";
?> 