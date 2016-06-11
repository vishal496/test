<?php
require_once(MODEL_PATH."HomeModel.php");

class PagesController
{
  private $_database;

  function __construct() 
  {
    $this->_database = new homeModel();
  }

  public function home() 
  {
	  $record_set = $this->_database->find_record_name();
    $array = [];
    while ($row = mysqli_fetch_assoc($record_set)) {
      $array[] = $row;
    }
	  $array_length = count($array);
    require_once(VIEW_PATH."home_languages.php");
  }	
}
?>