// Sample wp-config.php for AWS WordPress Deployment
// Replace placeholders with your actual RDS credentials

<?php
define('DB_NAME', 'wordpressdb');        // Your RDS database name
define('DB_USER', 'admin');              // Your RDS username
define('DB_PASSWORD', 'your-password');  // Your RDS password
define('DB_HOST', 'your-rds-endpoint');  // e.g. wordpressdb.xxxxx.us-east-1.rds.amazonaws.com

define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');
