<?php

// Include my database connection file Hehe
require_once("../../Pinpark/db/connectToDatabase.php");
// echo "<br/>";
// echo "include successful!";

/*
  !: QUEREIS FOR DATABASE & TABLES
  * ALL QUERIES ARE SUPPOSED TO SET AS COMMENT
  * After the initial setup is a good practice to prevent errors related to existing
  * tables or duplicate data. 
  * This helps avoid unintentional re-creation of tables or insertion of duplicate data.  
*/

// $sql_Db = "CREATE DATABASE db_parkingsys";

// SQL query to create a table together with its variable and data sql datatype

// $sql = "CREATE TABLE users_tbl (
//   uid int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
//   usersFullName varchar(128) NOT NULL,
//   usersEmail varchar(128) NOT NULL,
//   username varchar(128) NOT NULL,
//   userPwd varchar(128) NOT NULL
// )";

// Let's Execute the query

// if ($conn->query($sql) === true) {
//   echo "Table successfully created";
// } else {
//   echo "Error creating the table: " . $conn->error;
// }

// * CREATE A TABLE

//  $sql_db = "CREATE TABLE login_tbl (
//   uid int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
//   username varchar(50) NOT NULL,
//   password varchar(50) NOT NULL,
//   usertype ENUM('admin', 'user', 'worker') NOT NULL DEFAULT 'user' 
// )";

// if ($conn->query($sql_db) === true) {
//   echo "LOGIN Table successfully created";
// } else {
//   echo "Error creating the table: " . $conn->error;
// }

// * Inserting data into the login_tbl table
// $insertAdmin = "INSERT INTO login_tbl (uid, username, password, usertype) VALUES (NULL, 'admin12345', 'Admin12345', 'admin')";
// $insertUser = "INSERT INTO login_tbl (uid, username, password, usertype) VALUES (NULL, 'user12345', 'user12345', 'user')";
// if ($conn->query($insertAdmin) && $conn->query($insertUser)) {
//   echo "Data inserted successfully!";
// } else {
//   echo "Error inserting data: " . $conn->error;
// }


// * Inserting worker data into the login_tbl table
// $insertWorker = "INSERT INTO login_tbl (uid, username, password, usertype) VALUES (NULL, 'worker123', 'worker123', 'worker')";

// if ($conn->query($insertWorker)) {
//   echo "Data inserted successfully";
// } else {
//   echo "Error inserting data: " . $conn->error;
// }

//  *  Creating table of booking 

// $sql_tbl = "CREATE TABLE Booking_tbl (
//   id INT(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
//   first_name VARCHAR(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
//   last_name VARCHAR(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
//   phone_num VARCHAR(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
//   email_acc VARCHAR(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
//   car_brand VARCHAR(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
//   car_unit VARCHAR(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
//   car_plate VARCHAR(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
//   date VARCHAR(250) NOT NULL
// )";

// if ($conn->query($sql_tbl) === true) {
//   echo "Booking_tbl Table successfully created";
// } else {
//   echo "Error creating table: " . $conn->error;
// }

// * Inserting Sample Data in Booking_tbl

// $user1 = "INSERT INTO booking_tbl (first_name, last_name, phone_num, email_acc, car_brand, car_unit, car_plate, date) VALUES ('jessie', 'abo', '+639451700517', 'jessiabol@gmail.com', 'toyota', 'viosgrs', 'lto1234', '2023-12-21')";

// * Check if it is already inserted to the table with an Error handling.

// if ($conn->query($user1) === true) {
//   echo "Record inserted successfully!";
// } else {
//   echo "Error: " . $user1 . "<br>" . $conn->error;
// }

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//   $location = "";
// }

/*
	! TIME DATA
	! DATE – Stores Data in the format YYYY-MM-DD.
	! TIME – Stores Time in the format hh:mm:ss.
  ! DATATIME – Stores Date and time in the format YYYY-MM-DD and hh:mm:ss.
*/

// * Add new column in existing table

// $tableName = "booking_tbl";

// * SQL Add three new columns after date column

// $newCols = "ALTER TABLE booking_tbl
//             ADD COLUMN time_in TIME NOT NULL DEFAULT '00:00:00' AFTER date,
//             ADD COLUMN date_out DATE DEFAULT '2023-12-01' AFTER time_in,
//             ADD COLUMN time_out TIME NOT NULL DEFAULT '00:00:00' AFTER date_out";

// EXECUTE QUERY 

// if ($conn->query($newCols) === TRUE) {
//   echo "Columns added successfully";
// } else {
//   echo "Error: " . $newCols . "<br>" . $conn->error;
// }

// * Insert Location to current user

// $locUser1 = "INSERT INTO booking_tbl (location) VALUES ('bgctaguigcity')";

// if ($conn->query($locUser1) === true) {
//   echo "Record Inserted Successfully";
// } else {
//   echo "Error: " . $locUser1 . "<br>" . $conn->error;
// }


// * SElECTING QUERY

// $selectUser = "SELECT * FROM booking_tbl WHERE first_name = 'jessie'";

// * Execute selecting query

// $result = $conn->query($selectUser);

// * Check if the SELECT query was successful 

// if ($result) {
//   while ($row = $result->fetch_assoc()) {
//     echo "ID: " . $row["id"] . "<br>";
//     echo "First Name: " . $row["first_name"] . "<br>";
//   }
//   $result->free();
// } else {
//   echo "Error in Select query: " . $conn->error;
// }

// * INSERT QUERY

// $locationDetail = "BGCTaguigCity";
// $insertQuery = "UPDATE booking_tbl SET location = '$locationDetail' WHERE first_name = 'jessie'";

// *  Execute the Insert Query 

// if ($conn->query($insertQuery) === true) {
//   echo "Location detail added successfully";
// } else {
//   echo "Error in INSERT query: " . $conn->error;
// }
