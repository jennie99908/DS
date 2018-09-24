<?php

class Work{
  public $work_id;
  public $team_id;
  public $task_id;
  public $start_date;
  public $stop_date;
  public $hours;

  public function _construct($data) {
    //TODO:!
  }

  public static function findByTaskId($taskId){
    //1. Get Db connection_aborted
    $db = new PDO(DB_SERVER, DB_USER, DB_PW);
    var_dump($db);

    die;

    //2. Prepare SQL Statement
    //3. Rxecute statement
  }

}
