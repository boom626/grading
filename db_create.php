<?php
$dbuser = "u07600626"; $dbpass = "PwdDBIs07600626"; $dbhost = "localhost"; $dbname = "std_db07600626";
$cid = mysqli_connect($dbhost, $dbuser, $dbpass)
or die("Unable to connect to MySQL");
$selected = mysqli_select_db($cid, $dbname)
or die("Could not select the database");
mysqli_query($cid, "DROP TABLE student"); // drop table if exists
if ( mysqli_query($cid, "CREATE TABLE student (id char(8) not null, name varchar(30),
major char(2), gpa integer, primary key(id))") )
echo "Done: Creating a new table.";
else
echo "Failed: " . mysqli_error($cid);
mysqli_close($cid);
?>

<!-- --------------------------------------------
//<//?php
//$dbuser = "u07600626"; $dbpass = "PwdDBIs07600626"; $dbhost = "localhost"; $dbname = "std_db07600626";
//$cid = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)
//or die("Unable to connect to MySQL or database");
//$result = mysqli_query($cid, "INSERT INTO student(id, name, major, gpa)
//VALUES ('07990999', 'Somchai Rukdee', 'CS', 3.56)");
//if($result)
//echo "Done: Adding a new record.";
//else
//echo "Failed: " . mysqli_error($cid);
//mysqli_close($cid);
//  //?>
------------------------------------------ -->