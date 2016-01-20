<?php
/**
 * DB config
 */
define('DB_HOST', getenv('OPENSHIFT_MYSQL_DB_HOST'));
define('DB_PORT', getenv('OPENSHIFT_MYSQL_DB_PORT'));
define('DB_USER', getenv('OPENSHIFT_MYSQL_DB_USERNAME'));
define('DB_PASS', getenv('OPENSHIFT_MYSQL_DB_PASSWORD'));
define('DB_NAME', getenv('OPENSHIFT_APP_NAME'));

/*
 * Google API Key
 */
define("GOOGLE_API_KEY", "AIzaSyCRHbanMuiUMJolX96IR6i9gBHGBKuc9Sw");
?>
