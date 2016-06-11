<?php
require_once("Model.php");

class LanguageModel extends model
{
	
	public function find_all_record_description($lang)
  {
    $sql = "SELECT description FROM record WHERE name='$lang'";
    $record_set = $this->query($sql);
	  return $record_set;
	} 
	
  public function find_all_social_link($lang)
  {
    $sql = "SELECT description FROM social_links WHERE record_name='$lang'";
    $link_set = $this->query($sql);
    return $link_set; 	 
	}
	 
  public function find_all_study_material($lang)
  {
    $sql = "SELECT description FROM study_material WHERE record_name='$lang'";
    $study_set = $this->query($sql);
    return $study_set; 	 
	}
	 
  public function find_images($lang)
  {
    $sql = "SELECT image_name FROM images WHERE image_name='$lang.png'";
	  $image_set = $this->query($sql);
	  return $image_set;
	}
	 
  public function form_entry($firstname,$lastname,$email,$phone,$course)
  {
    $query = "INSERT INTO enquiry(first_name, last_name, email, phone, course) VALUES ('{$firstname}','{$lastname}','{$email}','{$phone}','{$course}')";
    $query_result = $this->query($query);
	  return $query_result;
	}
}
?>