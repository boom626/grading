<?php include "connection.php" ?>
<?php
$sql = "SELECT * from grading where id = '{$_REQUEST['id']}'";
if ($result = mysqli_query($cid, $sql)) {
    while ($row = mysqli_fetch_array($result)) {
        printf("ID: %s<br/>\n", $row["id"]);
        printf("ScoreMid: %s<br/>\n", $row["mid_Score"]);
        printf("ScoreFinal: %s<br/>\n", $row["final_score"]);
        printf("SumScore: %s<br/>\n",$row["sum_score"]);
        printf("Grade: %s<br/>\n", $row["grade"]);
    }
} else echo "None.";
mysqli_close($cid);
?>