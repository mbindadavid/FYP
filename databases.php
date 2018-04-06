<?php
// 1. Create a database connection
$connection = mysql_connect("localhost","root","Jesus.");
if (!$connection) {
    die ("Database connection failed: " . mysql_error());
}

// 2. Select a database to use
$db_select = mysql_select_db("tgdms1",$connection);
if (!$db_select){
    die("Database selection failed: " . mysql_error());
}

?>
<html>
<head> 
<title>Basic</title>
</head>
<body>
<?php
// 3. Perform database query
$result = mysql_query("SELECT * FROM subjects",$connection);
if (!$result){
    die("Database selection failed: " . mysql_error());
}

// 4. Use return data
while ($row = mysql_fetch_array($result)){
    echo $row[1]." ".$row[2]."<br />";
}

?>
</body>
</html>
 <?php
 // 5. Close connection
 mysql_close($connection);
 ?>