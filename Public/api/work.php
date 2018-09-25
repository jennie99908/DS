<?php
require '../../app/common.php';


// Get the taskId from URL params
$taskId = intval($_GET['taskId'] ?? 0);



//Fetch the work from the db
$work = Work::findByTaskId($taskId);

//convert to json and print
$json = json_encode($work);

echo $json;
