<?php

require 'src/DB_class.php';


// Define constants for your website
define("DATABASE_HOST", "my_database_host");
define("DATABASE_NAME", "my_database_name");
define("DATABASE_USER", "my_database_username");
define("DATABASE_PASSWORD", "my_database_password");

// Initialize the DB Class
$DB = new DB(DATABASE_HOST, DATABASE_NAME, DATABASE_USER, DATABASE_PASSWORD);
$DB->setFetchMode(PDO::FETCH_ASSOC);

// Return all users that i have in my db
$users = $DB->fetch("SELECT username, firstname, lastname, email FROM users");

// Display each user's informations
foreach ($users as $key => $user) {
  var_dump($user);
}
