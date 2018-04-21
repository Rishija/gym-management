<?php
$serverName = "localhost";
$userName = "root";
$password = "root";
$conn = mysqli_connect($serverName, $userName, $password);
if($conn) {
  $dbname = "gym";
  $createDb = "CREATE DATABASE $dbname";
  $db = mysqli_query($conn, $createDb);
  if($db) {
    echo "Database created! <br>";
    if(mysqli_select_db($conn, $dbname)) {
      echo "Database \"$dbname\" is in use <br>";
      $table = "CREATE TABLE members (
        id INTEGER PRIMARY KEY AUTO_INCREMENT,
        username VARCHAR(30) NOT NULL UNIQUE,
        fname VARCHAR(30) NOT NULL,
        lname VARCHAR(30) NOT NULL,
        email VARCHAR(40) NOT NULL,
        phone VARCHAR(10) NOT NULL,
        joined DATETIME
      );";
      $tableCreated = mysqli_query($conn, $table);
      if($tableCreated) {
        echo "Table 'members' created successfully<br>";
      } else {
        echo "Can't create Table 'members'";
      }
      $table = "CREATE TABLE trainer (
        id INTEGER PRIMARY KEY AUTO_INCREMENT,
        username VARCHAR(30) UNIQUE NOT NULL,
        password VARCHAR(256) NOT NULL,
        specialization VARCHAR(20) NOT NULL,
        qualification VARCHAR(20) NOT NULL,
        experience INT(2) NOT NULL,
        salary INT(5),
        type VARCHAR(10),
        FOREIGN KEY (username) REFERENCES members(username)
      );";
      $tableCreated = mysqli_query($conn, $table);
      if($tableCreated) {
        echo "Table 'trainer' created successfully<br>";
      } else {
        echo "Can't create Table 'trainer'";
            }
      $table = "CREATE TABLE client (
        id INTEGER PRIMARY KEY AUTO_INCREMENT,
        username VARCHAR(30) UNIQUE NOT NULL,
        password VARCHAR(256) NOT NULL,
        weight INT(3),
        height FLOAT NOT NULL,
        fee INT(5),
        purpose VARCHAR(20),
        medicalHistory VARCHAR(100),
        trainer VARCHAR(30) UNIQUE,
        FOREIGN KEY (username) REFERENCES members(username),
        FOREIGN KEY (trainer) REFERENCES trainer(username)
      );";
      $tableCreated = mysqli_query($conn, $table);
      if($tableCreated) {
        echo "Table 'client' created successfully<br>";
      } else {
        echo "Can't create Table 'client'";
      }
      // Create table admin and add root entry
    }
    else {
      echo "Can't use database $dbname";
    }
  }
  else {
    echo "Couldn't create database";
  }
} else {
  echo "Failed to connect!";
}
$conn.close();
?>
