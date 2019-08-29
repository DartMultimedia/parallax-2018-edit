<?php

define('DB_NAME','dart contact form');
define('DB_NAME','root');
define('DB_NAME','');
define('DB_NAME','localhost');

$link = mysql_connect (DB_HOST, DB_USER, DB_PASSWORD);

if(!$link) {
    die ('Could not connect: ' . mysql_error());
}

$db_selected = mysql_select_db(DB_NAME, $link);

if (!$db_selected) {
    die('Can'\'t use' . DB_NAME . ': ' . mysql_error());
}