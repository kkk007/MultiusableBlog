<html>
<body>

<?php
//connect to MySQL
$db = mysql_connect('localhost', 'root', '') or
die ('Unable to connect. Check your connection parameters.');
//create the main database if it doesn�t already exist
$query = 'CREATE DATABASE IF NOT EXISTS Users';
mysql_query($query, $db) or die(mysql_error($db));
//make sure our recently created database is the active one
mysql_select_db('Users', $db) or die(mysql_error($db));
//create the movie table
$query = 'CREATE TABLE record (
	Id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
	Username VARCHAR(255) NOT NULL DEFAULT 0,
	Pass VARCHAR(255) NOT NULL DEFAULT 0,
	PRIMARY KEY (Id),
	KEY Username (Username , Pass)
)
ENGINE=MyISAM';
mysql_query($query, $db) or die (mysql_error($db));
echo 'Users database successfully created!';
?>
</body>
</html>
