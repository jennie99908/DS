<?php

class Work{
  public $id;
  public $team_id;
  public $task_id;
  public $start;
  public $stop;
  public $hours;
  public $completion_estimate;

  public function __construct($data) {
    $this->work_id = $data['work_id'];
    $this->team_id = $data['team_id'];
    $this->task_id = $data['task_id'];
    $this->start_date = $data['start_date'];
    $this->end_date = $data['end_date'];
    $this->hours = 0;
  }

  public static function findByTaskId($taskId){
    //1. Get Db connection_aborted
    $db = new PDO (DB_SERVER, DB_USER, DB_PW);
    var_dump($db);

    die;

    //2. Prepare SQL Statement
    //3. Rxecute statement
  }

}
