<?php
$completeurl = file_get_contents("http://www.googleapis.com/moderator/v1/series/750605/topics/74/submissions?sort=RANK_DESCENDING&max-results=6");

echo $completeurl;

?>