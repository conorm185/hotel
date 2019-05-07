<?php

	include "includes/validation.class.php";

	$firstname = new ValidationResult("", "", "", true);
	$lastname = new ValidationResult("", "", "", true);
	$phone = new ValidationResult("", "", "", true);
	$email = new ValidationResult("", "", "", true);
	$agree = new ValidationResult("", "", "", true);

	$errors = false;
	$errorMessages = "";

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$firstname = ValidationResult::checkParameter('firstname', '[^[A-z]+$]', 'First name is required');
	$lastname = ValidationResult::checkParameter('lastname', '[^[A-z]+$]', 'Last name is required');
	$phone = ValidationResult::checkParameter('phone', '[^(\([0-9]{3}\) |[0-9]{3}-)[0-9]{3}-[0-9]{4}$]', 'Invalid phone');
	$email = ValidationResult::checkParameter('email', '[^[A-z0-9._%+-]+@[A-z0-9.-]+\.[A-z]{2,4}$]', 'Invalid email');
	$agree = ValidationResult::checkParameter('agree', '[^[o][n]$]', 'You must agree to the terms and conditions');
	
	$errorMessages .= '<p>' . $firstname->getErrorMessage() . '</p>';
	$errorMessages .= '<p>' . $lastname->getErrorMessage() . '</p>';
	$errorMessages .= '<p>' . $phone->getErrorMessage() . '</p>';
	$errorMessages .= '<p>' . $email->getErrorMessage() . '</p>';
	$errorMessages .= '<p>' . $agree->getErrorMessage() . '</p>';
	
	if (! $firstname->isValid() || !$lastname->isValid() || !$phone->isValid() || !$email->isValid() || !$agree->isValid()) {
		$errors = true;
	}
	
	if ($errors == false) {
		header ('Location: process-contact.php');
	}
	
	}

?>

<!DOCTYPE html>
<html lang=en>
<head>
<meta charset=utf-8>
    <link href='https://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="css/semantic.js"></script>
    <script src="js/misc.js"></script>
    <script src="js/validationx.js"></script>
    
    <link href="css/semantic.css" rel="stylesheet" >
    <link href="css/icon.css" rel="stylesheet" >
    <link href="css/styles.css" rel="stylesheet">
</head>
<body >
    
<?php include 'includes/header.inc.php'; ?>
<div class="banner-container">
    <div class="ui sizer container">
        <h1 class="ui huge header">Contact us now with any questions</h1>
    </div>  
</div>  
<h2 class="ui horizontal divider"><i class="write icon"></i>Enter below</h2>   
    
<main>
   <section class="ui stackable container">
      <form class="ui form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
         <h4 class="ui dividing header">Personal Information</h4>
         <div class="field" >
            <label>Name</label>
            <div class="two fields">
               <div class="field <?php echo $firstname->getCssClassName(); ?>" id="firstnamecontainer">
                  <input type="text" name="firstname" placeholder="First Name" id="firstname" value="<?php echo $firstname->getValue();?>">
               </div>
               <div class="field <?php echo $lastname->getCssClassName(); ?>" id="lastnamecontainer">
                  <input type="text" name="lastname" placeholder="Last Name" id="lastname" value="<?php echo $lastname->getValue();?>">
               </div>
            </div>
         </div>
         <div class="two wide field <?php echo $phone->getCssClassName(); ?>" id="phonecontainer">
            <label>Phone</label>
            <input type="text" name="phone" placeholder="xxx-xxx-xxxx" id="phone" value="<?php echo $phone->getValue();?>">
         </div>
         <h4 class="ui dividing header">Login Information</h4>
         <div class="field <?php echo $email->getCssClassName(); ?>" id="emailcontainer">
            <label>E-mail</label>
            <input type="email" placeholder="joe@schmoe.com" name="email" id="email" value="<?php echo $email->getValue();?>">
         </div>
         <div class="inline field" id="agreecontainer">
            <div class="ui checkbox">
               <input type="checkbox" tabindex="0" name="agree" id="agree" <?php if($agree->isValid()) {echo 'checked';}?>>
               <label>I agree to the terms and conditions</label>
            </div>
         </div>
         
		 <?php if ($errors) { ?>
         <div id="errors" class="ui negative message">
            <h3 class="header">Errors were encountered</h3>
            <div class="ui divider"></div>
            <div id="errorMessages"> </div>
			
			<?php echo $errorMessages; ?>
			
         </div>
         <?php } ?>
         <button type="submit" class="ui primary button" tabindex="0" id="register">Submit</div>
      </form>
   </section>
</main>
</body>
<?php include 'includes/footer.inc.php'; ?>
</html>