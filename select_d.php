<?php

$hostname="localhost"; // 
$user="root"; //
$pass=""; //
$dbase="employees"; //
$conn = new mysqli($hostname, $user, $pass, $dbase);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


    $results = $conn->query("
        SELECT dept_no, 
        FROM   dept_manager
		WHERE  emp_no = '10003'
    ");
	
	
	while($row_mlti = $results->fetch_assoc()) {
        
        $department_no = $row_mlti['dept_no'];
    break;
    }
	
	
	
	
	
	
	
	$sql = "SELECT * FROM `employees` WHERE ";
	
	CREATE TABLE employees (
    emp_no      INT             NOT NULL,
    birth_date  DATE            NOT NULL,
    first_name  VARCHAR(14)     NOT NULL,
    last_name   VARCHAR(16)     NOT NULL,
    gender      ENUM ('M','F')  NOT NULL,    
    hire_date   DATE            NOT NULL,
    PRIMARY KEY (emp_no)
);



CREATE TABLE departments (
    dept_no     CHAR(4)         NOT NULL,
    dept_name   VARCHAR(40)     NOT NULL,
    PRIMARY KEY (dept_no),
    UNIQUE  KEY (dept_name)
);




$conn->close();



?>