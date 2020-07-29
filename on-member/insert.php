<?php
//insert.php
if(isset($_POST["subject"]))
{
 include("../config.php");
 $subject = mysqli_real_escape_string($dbconnect, $_POST["subject"]);
 $comment = mysqli_real_escape_string($dbconnect, $_POST["comment"]);
 $query = "
 INSERT INTO comments(comment_subject, comment_text)
 VALUES ('$subject', '$comment')
 ";
 mysqli_query($dbconnect, $query);
}
?>