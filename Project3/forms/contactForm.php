<!DOCTYPE html>

<html lang="en">

   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Contact Us</title>
      <?php include "../includes/base.php" ?>
      <link href="https://fonts.googleapis.com/css?family=Julius+Sans+One|Roboto+Slab|Titillium+Web" rel="stylesheet">
      <link rel="stylesheet" href="./css/style.css" />
   </head>

   <body>
	<?php include "../includes/header.php" ?>
        <?php include "../includes/menu.php" ?>
      <div class="row">
      <aside class="col-6">
      <p style="text-align:center;"><img src="./images/phone.ico" alt="phone icon" class="icon"/></p>
      <header> Contact Us! </header>
      <p style="text-align: center;">
        Please fill out the following form with your contact information. One or both of us will get an email with the provided contact information and message. One of both of us will respond to any releveant massages regarding this webiste, questions/ concerns, or possible job openings. All are welcome to reach out with any critques and/or questions. We do not provide our personal contact information on this website for privacy reasons. Any and all information provided through this website will be kepted confidential and will not be share with any outside entities. Thank you for your interest in our webpage, we'd love to hear from you soon!</p>
      </aside>
      <?php include "process.php"; ?>

      <?php
          if ($_SERVER["REQUEST_METHOD"] == "GET" || $hasErrors ) {
      ?>

      <section class="col-6">
      <h3 id="formLabel" title="This is a form to give us your contact information">Contact Information </h3>
        <p style="font-size: 13px;;">All required information is followed by an asterick (*)</p>
        <form role="form" aria-labelledby="formLabel" id="contactForm" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
          <fieldset>
	     <label for="cdate" class="label"> Date <em>*</em></label>
	     <input type="date" id="cdate" name="cdate" value="<?php print $date; ?>" tabindex="0" aria-required="true" aria-invalid="<?php if ( $dateErr == "" ){print "false";} else {print "true";}?>">
	     <span class="errorMsg"><?php print $dateErr;?></span>
	     <br/>

	     <label for="name" class="label"> Name <em>*</em></label>
	     <input type="text" id="name" name="fullname" value="<?php print $fullname; ?>" tabindex="1" aria-required="true" aria-invalid="<?php if ( $fullnameErr == "" ){print "false";} else {print "true";}?>">
	     <span class="errorMsg"><?php print $fullnameErr;?></span>
	     <br/>

	     <label for="phone" class="label"> Phone <em>*</em></label>
	     <input type="text" id="phone" name="phoneNum" value="<?php print $phone; ?>" tabindex="2" aria-required="true" aria-invalid="<?php if ( $phoneErr == "" ){print "false";} else {print "true";}?>">
	     <span class="errorMsg"><?php print $phoneErr;?></span>
	     <br/>

	     <label for="emailaddr" class="label"> Email <em>*</em></label>
	     <input  type="email" id="emailaddr" name="emailaddr" value="<?php print $emailAdd; ?>" tabindex="3" aria-required="true" aria-invalid="<?php if ( $emailAddErr  == "" ){print "false";} else {print "true";}?>">	     
	     <span class="errorMsg"><?php print $emailAddErr;?></span>
	     <br/>

	     <label class="label" for="job"> Job Title <em>*</em></label>
	     <input type="text" id="job" name="job" value="<?php print $job; ?>" tabindex="4" aria-required="true" aria-invalid="<?php if ( $jobErr == "" ){print "false";} else {print "true";}?>">
	     <span class="errorMsg"><?php print $jobErr;?></span>
	     <br/>
 
	     <label class="label" for="person"> Send to: </label> <br/>
	       <span class="label"> Emily Bower</span>      
	       	     <input type="checkbox" id="emily"  name="person[emily]" tabindex="5" value="emily" <?php if ( $person['emily'] == "emily" )   print "checked"; ?>> <br/><br/>
	       <span class="label"> Casey Kaku </span>      
	             <input type="checkbox" id="casey"   name="person[casey]" tabindex="6" value="casey" <?php if ( $person['casey'] == "casey" )   print "checked"; ?>> <br/><br/>
	     
	     <label for="note" class="label">Message</label>
	     <textarea id="note" aria-multiline="true" class="col-12" tabindex="7" name="note">
              <?php print $notes; ?></textarea>

	  </fieldset>

	  <p style="text-align: center;">
	  <input class="button" type="submit" value="Submit" title="Press this button to submit your contact information"></p>
      </form>
      </section>
      <?php 
       } 
	
        if ( $_SERVER["REQUEST_METHOD"] == "POST" && !$hasErrors ) {

             include "sendData.php";

	     $url = htmlspecialchars($_SERVER['PHP_SELF']);
	     header( "Location: $url", true, 303);
	     exit;
	}  
	
      ?>
   </div>
   <?php include "../includes/footer.php" ?>	
   </body>
</html>
