<?php
require_once(CONFIG_PATH."config.php");

class model 
{
  private $_connection;

  function __construct()
  {
    $this->open_connection();
	}

  public function open_connection() 
  {
    $this->_connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
  }  
   
  public function close_connection() 
  {
    if (isset($this->_connection)) {
      mysqli_close($this->_connection);
      unset($this->_connection);
    }
  }
   
  public function query($sql) 
  {
    return mysqli_query($this->_connection, $sql);
	} 
   
  public function mysqli_prep($string) 
  {
    return mysqli_real_escape_string($this->_connection, $string);
  }
}	 
?>	