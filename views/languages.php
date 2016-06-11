<?php include("header.php"); ?>
   
<div class="container">
	<header>
	    <image src="<?php echo LOGO_PATH; ?><?php echo $image_name; ?>" class="logo" />
	        <nav class="nav">
		    <ul>
			   <li><a href="http://localhost/languages1/index.php"> HOME </a></li>
			   <li><a href=""> TUTORIAL </a></li>
			   <li><a href=""> ABOUT </a></li>
			   <li><a href=""> CONTACT </a></li>
			</ul>
		    </nav>
		<div class="clear"></div>
	</header>
    <section class="left_side">
	    <article>
		    <header>
		    	<h1><?php echo $record_name; ?></h1>
			</header>
                <p><?php echo $record_description; ?></p>		
		</article>
	</section>
	<aside class="right_side">
	    <div>
		    <h1> SOCIAL LINKS </h1>
			<?php for($i=0;$i<$array_social_links_length;$i++) { ?>
			<ul>
			    <li><a href=""><?php echo $array_social_links[$i]['description']; ?></a></li>
			</ul>
			<?php } ?>
		</div>
		<div>
	        <h1> STUDY MATERIAL </h1>
			<?php for($j=0;$j<$array_study_set_length;$j++) { ?>
			<ul>
			    <li><a href=""><?php echo $array_study_set[$j]['description']; ?></a></li>
			</ul>
			<?php } ?>
		</div>
		<div>
		    <form action="index.php?controller=form&action=enquiry" method="post">
			    <fieldset class="entries">
				    <h2>ENQUIRY:</h2>
				    <br><label for="first_name">First Name:</label> <input type="text" name="first_name"  id="first_name" /></br>
				    <br><label for="last_name">Last Name:</label> <input type="text" name="last_name" id="last_name" /></br>
				    <br><label for="email">Email:</label> <input type="text" name="email"  id="email" /></br>
				    <br><label for="phone">Phone No.:</label> <input type="text" name="phone_no"  id="phone" /></br>
					</br>
					Course:
					    <select name="course">
						    <option value="b.tech">B.TECH</option>
						    <option value="b.e">B.E</option>
						    <option value="M.tech">M.TECH</option>
						    <option value="b.c.a">B.C.A</option>
						    <option value="m.c.a">M.C.A</option>
						</select>
					</br></br>
					<input type="submit" name="submit" value="submit" />					
					<input type="reset" value="reset" />					
			    </fieldset>
			</form>	
		</div>
	</aside>
	
 <?php require_once("footer.php"); ?>  	 