<?php

var_dump($_Post);

$work = new Work($_Post);

$work->create();

echo json_encode($work);
