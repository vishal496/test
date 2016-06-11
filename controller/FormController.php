<?php
require_once(MODEL_PATH."LanguageModel.php");

class FormController
{
  
  private $_database;

  function __construct() 
  {
    $this->_database = new languageModel();
  }

  public function enquiry()
  {
    if (isset($_POST['submit'])) { 
      // Often these are form values in $_POST
      $firstname = (isset($_POST['first_name']) && !empty($_POST['first_name'])) ? $_POST['first_name']:"";
      $lastname = (isset($_POST['last_name']) && !empty($_POST['last_name'])) ? $_POST['last_name']:"";
      $email = (isset($_POST['email']) && !empty($_POST['email'])) ? $_POST['email']:"";
      $phone = (isset($_POST['phone_no']) && !empty($_POST['phone_no'])) ? $_POST['phone_no']:"";
      $course =(isset($_POST['course']) && !empty($_POST['course']) ) ? $_POST['course']:"";
      //2. Perform database query
      $this->_database->form_entry($firstname,$lastname,$email,$phone,$course);
      // Test if there was a query error
      if ($this->_database) {
        echo "Form submitted successfully";
        header("Location: http://localhost/languages1/index.php");
      } else {
          // Failure
          // $message = "Subject creation failed";
          die("Database query failed ".mysqli_error($connection));
	      }
    }
  }
} 
?>