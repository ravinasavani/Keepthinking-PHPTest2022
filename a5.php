<?php

/* 

For below SQL if we use place name like "Jimmy's Place" then it will causes an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 's Place')' because of special character in name.It is an SQL injection vulnerability. 

So before inserting the place name used real_escape_string() function that removes any special characters that may interfere with the query operations. It's used to escape all special characters for use in an SQL query.

*/

$place = "Jimmy's Place";
$place = $conn->real_escape_string($place);
$sql = "INSERT INTO place(name) VALUES('{$place}')";
$this->db->query($sql);
