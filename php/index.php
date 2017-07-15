<?php

echo "Connecting to database..." . "<br />";

$mysqli = new mysqli("db", "php", "php", "php");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "<br />";

//$tableDrop = $mysqli->query("DROP TABLE IF EXISTS test");
//echo $tableDrop ? "Dropped table". "<br />" : "Failed to drop table" . "<br />";
//
//$tableCreate = $mysqli->query("CREATE TABLE test(id INT, name NVARCHAR(10))");
//echo $tableCreate ? "Created table" . "<br />" : "Failed to create table" . "<br />";
//
//$tableInsert = $mysqli->query("INSERT INTO test(id,name) VALUES(1,'Stu')");
//echo $tableInsert ? "Inserted record" . "<br />" : "Failed to insert record" . "<br />";

$results = $mysqli->query("SELECT id,name FROM test");
$results->data_seek(0);
while($row = $results->fetch_assoc()){
	$id = $row['id'];
	$name = $row['name'];
	echo "ID: $id - Name: $name.";
}