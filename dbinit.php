<?php

$serverName = "localhost";
$userName = "root";
$password = "root";
$conn = mysqli_connect($serverName, $userName, $password);

if($conn) {

  $dbname = "gym";
  $createDb = "CREATE DATABASE IF NOT EXISTS $dbname";
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
      }
      else {
        echo "Can't create Table 'members'<br>";
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
        clientAssigned int(2),
        FOREIGN KEY (username) REFERENCES members(username)
      );";

      $tableCreated = mysqli_query($conn, $table);
      if($tableCreated) {
        echo "Table 'trainer' created successfully<br>";
      }
      else {
        echo "Can't create Table 'trainer'<br>";
      }

      $table = "CREATE TABLE client (
        id INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL,
        username VARCHAR(30) UNIQUE NOT NULL,
        password VARCHAR(256) NOT NULL,
        weight INT(3),
        height FLOAT NOT NULL,
        fee INT(5),
        purpose VARCHAR(20),
        medicalHistory VARCHAR(100),
        trainer VARCHAR(30) UNIQUE,
        chart BLOB,
        FOREIGN KEY (username) REFERENCES members(username),
        FOREIGN KEY (trainer) REFERENCES trainer(username)
      );";

      $tableCreated = mysqli_query($conn, $table);
      if($tableCreated) {
        echo "Table 'client' created successfully<br>";
      }
      else {
        echo "Can't create Table 'client'<br>";
      }

      $table = "CREATE TABLE admin (
        id INTEGER PRIMARY KEY AUTO_INCREMENT,
        username VARCHAR(30) UNIQUE NOT NULL,
        password VARCHAR(20) NOT NULL,
        adminKey INT(11) NOT NULL
      )";

      $tableCreated = mysqli_query($conn, $table);
      if(tableCreated) {
        echo "Table 'admin' created successfully<br>";
      } else {
        echo "Can't create admin table<br>";
      }

      $sql = "INSERT INTO admin (id, username, password, adminKey) VALUES('2', 'first@admin', 'password', '2134321222')";

      if(mysqli_query($conn, $sql)) {
        $last_id = mysqli_insert_id($conn);
        echo "New admin created successfully. Admin id : " . $last_id;
      } else {
        echo "Error in creating new admin ".mysqli_error($conn);
      }
    }
    else {
      echo "Can't use database $dbname<br>";
    }
  }
  else {
    echo "Couldn't create database".mysqli_error($conn);
  }
}
else {
  echo "Failed to connect!".mysqli_connect_error();
}
$conn.close();
?>
