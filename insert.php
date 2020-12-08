<?php include "connection.php" ?>
<?php
$mid=$_GET['mid'];
$final=$_GET['final'];
$sum=$mid+$final;
$grade;
if($sum>=80){
	$grade="A";
}else if($sum<80 and $sum>=70){
	$grade="B";
}else if($sum<70 and $sum>=60){
	$grade="C";
}else if($sum<60 and $sum>=50){
	$grade="D";
}else{
	$grade="F";
}

$sql = "INSERT INTO grading(id,grade,sum_score,mid_score,final_score) VALUES ('{$_REQUEST['id']}','{$grade}',{$sum},{$mid},{$final})";
// printf($sql);
if (mysqli_query($cid, $sql))
	echo "Done: Adding a new record.";
else
	echo "Failed: " . mysqli_error($cid);
mysqli_close($cid);
?>
