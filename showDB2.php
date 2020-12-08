<?php include "connection.php" ?>
<?php
$id = $_GET['id'];
$sql = "SELECT id,sum_score,grade from grading where id='{$id}'";
if ($result = mysqli_query($cid, $sql)) {
    while ($row = mysqli_fetch_array($result)) {
        // printf("ID: %s<br/>\n", $row["id"]);
        printf("ScoreMid: %s<br/>\n", $row["mid_score"]);
        printf("ScoreFinal: %s<br/>\n", $row["final_score"]);
        printf("SumScore: %s<br/>\n",$row["sum_score"]);
        printf("Grade: %s<br/>\n", $row["grade"]);
    }
} else echo "None.";
echo "<br><a href='index.html'><button>OK</button></a>";
mysqli_close($cid);

?>