<?php
require_once(MODEL_PATH."LanguageModel.php");

class LanguageController
{
	private $_database;

	function __construct() 
	{
       $this->_database = new LanguageModel();
   	}

	public function languages()
	{
		$subject = $_GET['subject'];
      	$image_set = $this->_database->find_images($subject);   // image search from database.
	  	$record_set = $this->_database->find_all_record_description($subject);  // Language discription search from database.
	  	$link_set = $this->_database->find_all_social_link($subject);  // Social Link search from database.
	  	$study_set = $this->_database->find_all_study_material($subject);  // Study Material search from database.
	  
	  	$array_image = []; 
	  	while ($row_image = mysqli_fetch_assoc($image_set)) {
	  		$array_image[] = $row_image;
		}

	  	$array_record_set = []; 
	  	while ($row_record_set = mysqli_fetch_assoc($record_set)) {
	    	$array_record_set[] = $row_record_set;
		}

	  	$array_social_links = []; 
      	while ($row_social_link = mysqli_fetch_assoc($link_set)) {
	    	$array_social_links[] = $row_social_link;
		}
	  	$array_social_links_length = count($array_social_links); 
      
      	$array_study_set = []; 
      	while($row_study_set = mysqli_fetch_assoc($study_set)){
	    	$array_study_set[] = $row_study_set;
		}
      	
      	$array_study_set_length = count($array_study_set);
      	$record_description = $array_record_set[0]['description'];		
	  	$image_name = $array_image[0]['image_name'];
	  	$record_name = $subject;
      	require_once(VIEW_PATH."languages.php");
	}
}
?>    
