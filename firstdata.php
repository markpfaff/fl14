<?php
//firstdata.php

include 'credentials.php';
$sql = 'SELECT * FROM test_Customers';

//Connect to MySQL, authenticate the MySQL users
$myConn = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);

//Connect to the Database, verify authorization to this resource
mysql_select_db(DB_NAME,$myConn);

//Select data to be retrieved via SQL statement
//Retrieve data set (result)
$result = mysql_query($sql,$myConn);

//Loop through the data, and insert it into our page
while($row=mysql_fetch_assoc($result))
{ //pull data from array
    echo "FirstName: " . $row['FirstName'] . "<br />";
    echo "LastName: " . $row['LastName'] . "<br />";
    echo "Email: " . $row['Email'] . "<br />";
} 

//Disconnect from MySQL, and release resources 
@mysql_free_result($result); # releases web server memory
@mysql_close($myConn);

/*  How to connect to MySQL

Connect to MySQL, authenticate the MySQL users
Connect to the Database, verify authorization to this resource
Select data to be retrieved via SQL statement
Retrieve data set (result)
Loop through the data, and insert it into our page
Disconnect from MySQL, and release resources 

*/
