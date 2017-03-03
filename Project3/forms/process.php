  <?php

   $hasErrors = false;

   $date = $dateErr = $fullname = $fullnameErr = $phone = $phoneErr = $emailAdd = $emailAddErr = $job = $jobErr =  $person = $notes =  "";

   $person = array("","");

    // check if data posted
   // clean & save data

   if ( $_SERVER['REQUEST_METHOD'] == 'POST' && $_POST ) {

      $date   = cleanData($_POST['cdate']);         
      $dateErr = validate($date, 'cdate');
      if (!empty($dateErr)) $hasErrors = true;
      
      $fullname    = cleanData($_POST['fullname']);         
      $fullnameErr = validate($fullname, 'fullname');
      if (!empty($fullnameErr)) $hasErrors = true;

      $phone    = cleanData($_POST['phoneNum']);
      $phoneErr = validate($phone, 'phoneNum');
      if (!empty($phoneErr)) $hasErrors = true;

      $emailAdd   = cleanData($_POST['emailaddr']);          
      $emailAddErr    = validate($emailAdd, 'emailaddr');
      if (!empty($emailAddErr)) $hasErrors = true;

      $job    = cleanData($_POST['job']);
      $jobErr = validate($job, 'job');
      if (!empty($jobErr)) $hasErrors = true;       

      $notes   = cleanData($_POST['note']);        

      if ( count($_POST['person']) < 1 ) {
         $person = "";
      } else {
         $person = $_POST['person'];
      }

   }

   function cleanData( $data ) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
   }

   function validate( $data, $field ) {
      switch ( $field ) {
        case 'emailaddr' : {
                if ( !empty($data) ) {
                        if ( !filter_var($data,FILTER_VALIDATE_EMAIL) ) {                             				return "Invalid Email Address. Please re-enter";
                        }
                } else {
                        return "Email Address is required";
                 }
                return "";
        }

        case 'fullname' : {
                if ( !empty($data) ) {
                        $regex = "/^[a-zA-Z\s]*$/";
                        if ( !preg_match($regex, $data)) {
                                return "Please enter only letters and spaces";
                        }
                 } else {
                        return "Name is required";
                }
                return "";
        }

        case 'cdate' : {
                if ( !empty($data) ) {
                         $datechk = date_parse($data);
                        if ( !checkdate( $datechk['month'], $datechk['day'],$datechk['year'] )) {
                                return "Invalid Order Date. Please re-enter";
                        }
                 } else {
                         return "Date is required";
                }
                return "";
         }

        case 'phoneNum' : {
                if ( !empty($data) ) {
			if ( !preg_match("/^[0-9]{10}$/", $data) ) {
                         return "Invalid Phone Number. Please Re-enter";
                	}
		} else {
			return "Phone number is required";
		}
                return "";
        }

	 case 'job' : {
                if ( !empty($data) ) {
			 $regex = "/^[a-zA-Z\s]*$/";
                        if ( !preg_match($regex, $data) ) {
                         return "Please enter only letters and spaces";
                        }
                } else {
                        return "Job title is required";
                }
                return "";
        }

        default : break;
      }
    }

?>
