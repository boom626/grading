<?php include "connection.php" ?>
<?php
$sql="DELETE FROM grading WHERE id='{$_REQUEST["id"]}'";
if (mysqli_query($cid, $sql))
	echo "Done: delete record.";
else
	echo "Failed: " . mysqli_error($cid);
mysqli_close($cid);
print("<br><a href='index.html'><button>OK</button></a>");
?>