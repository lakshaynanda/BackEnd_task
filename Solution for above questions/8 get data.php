<?php

/*
make a database in mysql
get data (name and password) from get request
save in database in table 'user', use primary key 'id'

eg.
$name = $_GET['name'];
$password = $_GET['password'];
*/


//creating database
<?php
$servername = "localhost";
$username = "root";
$password = "lakshay";

$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "create database Employee";
if ($conn->query($sql) === TRUE) {
  echo "Database Created!!";
} else {
  echo "Error: " . $conn->error;
}
$conn->close();
?>


<?php
//creating table
$servername = "localhost";
$username = "root";
$password = "lakshay";
$dbname = "Employee";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE user (
id INT(6) PRIMARY KEY,
name VARCHAR(30) NOT NULL,
password VARCHAR(30) NOT NULL)";

if ($conn->query($sql) === TRUE) {
  echo "Table created";
} else {
  echo "Error: " . $conn->error;
}

$conn->close();
?>


<?php
//insert values
$servername = "localhost";
$username = "root";
$password = "lakshay";
$dbname = "Employee";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO user (id, name, password)
VALUES ('0011', 'Lakshay', 'lakshay101');";
$sql .= "INSERT INTO user (id, name, password)
VALUES ('0012', 'Keshika', 'hello101');";
$sql .= "INSERT INTO user (id, name, password)
VALUES ('0013', 'John', 'johndoe')";
$sql .= "INSERT INTO user (id, name, password)
VALUES ('0015', 'Siddharth', 'goradia007')";
$sql .= "INSERT INTO user (id, name, password)
VALUES ('0014', 'Rohit', 'sharmaji###')";


if ($conn->multi_query($sql) === TRUE) {
  echo "New records created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>


<?php
//write the code to get data
//get from form
$name = $_GET['name'];
$password = $_GET['password'];

$servername = "localhost";
$username = "root";
$password = "lakshay";
$dbname = "Employee";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "select id, name, password from user where name=".$name;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // echo data
  while($row = $result->fetch_assoc()) {
    echo "ID: " . $row["id"]. " NAME: " . $row["name"]. " PASSWORD: " . $row["password"]. "<br>";
  }
} else {
  echo "None";
}
$conn->close();
?>
?>