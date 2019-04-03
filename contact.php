<?php
    //b
	//This is the registration page for the site.
	//This file both displays and processes the registration form.
	//This script begun in Chapter 4

	//Require the configuration before any PHP code as the configuration controls error reporting:
	require('./includes/config.inc.php');
	//The config file also starts the session.
	
	//Require the database connection:
    require('./includes/mysql.inc.php');
    
    $page_title = 'Contacting MCH Telecom Inc';
    include "includes/head-inc.php";
	
	//For storing registration errors
	$reg_errors = array();

	//Check for form submission
	if($_SERVER['REQUEST_METHOD'] === 'POST'){

		//Check for the first name:
		if(preg_match ('/^[A-Z \'.-]{2,45}$/i', $_POST['first_name'])){
			$first_name = escape_data($_POST['first_name'], $dbc);
		}else{
			$reg_errors['first_name'] = 'Please enter your first name!';
		}

		//Check for the last name:
		if(preg_match ('/^[A-Z \'.-]{2,45}$/i', $_POST['last_name'])){
			$last_name = escape_data($_POST['last_name'], $dbc);
		}else{
			$reg_errors['last_name'] = 'Please enter your last name!';
		}

		//Check for the username:
        if(preg_match ('/^[A-Z \'.-]{2,45}$/i', $_POST['last_name'])){
			$business_name = escape_data($_POST['business_name'], $dbc);
		}else{
			$reg_errors['business_name'] = 'Please enter your business name!';
		}

		//Check for an email address
		if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === $_POST['email']){
			$email = escape_data($_POST['email'], $dbc);
		}else{
			$reg_errors['email'] = 'Please enter a valid email address!';
        }
        
        //Check for an Telephone
		if(($_POST['telephone'])){
			$telephone = escape_data($_POST['telephone'], $dbc);
		}else{
			$reg_errors['telephone'] = 'Please enter your telephone number!';
        }

        if(($_POST['message'])){
            $message = addslashes($_POST['message']);
        }else{
            $reg_errors['message'] = 'Please enter a message!';
        }

		if(empty($reg_errors)){// If everything's OK...
            $q = "INSERT INTO messages (business_name, first_name, last_name, email, telephone, message) VALUES ('$business_name', '$first_name', '$last_name', '$email', '$telephone', '$message')";
            
            $r = mysqli_query($dbc, $q);

            //Thank the new customer and send out an email:
            if(mysqli_affected_rows($dbc) === 1){
                echo "
                <div id='wrapper' class='contact-response'>
                    <div class='w50-l'>
                        <div class='alert-success'>
                            <h3>
                                Thank you $first_name,
                            </h3>
                            <p class='mt15'>
                                Your message has been received! If necessary, a representative will contact you shortly. If you need immediate assistance please call us at 
                                (734) 123-4567
                            </p>
                            <p class='mt15'>
                                <a href='contact.php'>&#9664; Go Back</a> 
                            </p>
                        </div>
                    </div>
                </div>"
                ;

                // Send a separate email?
                $body = "Thank you $first_name, your message has been received. A representative will contact you shortly. If you need immediate assistance, please call us at (734) 123-4567  \n\n";
                mail($_POST['email'], 'Email Confirmation', $body, 'From: admin@mchtelecominc.com');

                //Finish the page
                include('./includes/footer-template.php');
                
                /*************************************************************
                 Send email notification to MCH Telecom Inc
                ************************************************************/
                $headers = '';
                $formcontent = "<html>
                    <body>
                    <style>
                        .ReadMsgBody {width: 100%; background-color: #ffffff;}
                        .ExternalClass {width: 100%; background-color: #ffffff;}
                        body	 {width: 100%; background-color: #ffffff; margin:0; padding:0; /*-webkit-font-smoothing: antialiased;*/font-family: Georgia, Times, serif}
                        table {border-collapse: collapse;}
                        .mainTbl{width: 100%; max-width: 1024px;}
                        .tblFix{width: 49% !important;}
                        .imgFix{width: 100% !important;}

                        @media only screen and (max-width: 800px) and (min-width: 641px)  {
                            /*body[yahoo] .deviceWidth {width:440px!important; padding:0;}*/
                            body[yahoo] .center {text-align: center!important;}
                            .tblFix{width: 49% !important;}
                            .imgFix{width: 100% !important;}
                        }

                        @media only screen and (max-width: 640px) and (min-width: 480px)  {
                            /*body[yahoo] .deviceWidth {width:440px!important; padding:0;}*/
                            body[yahoo] .center {text-align: center!important;}
                            .tblFix{width: 100% !important;}
                            .imgFix{width: 100% !important;}
                        }

                        @media only screen and (max-width: 479px) {
                            /*body[yahoo] .deviceWidth {width:280px!important; padding:0;}*/
                            body[yahoo] .center {text-align: center!important;}
                            .tblFix{width: 100% !important;}
                            .imgFix{min-width: 320px !important;}
                            .imgFix{width: 100% !important;}
                        }

                        .fixedData td:nth-child(1), .fixedData td:nth-child(2), .fixedData td:nth-child(4) {
                            width: 20% !important;
                        }

                        .fullWidth td{
                            width: 100% !important;
                        }

                        .correspondence td:nth-child(1){
                            width: 23% !important;
                        }
                    </style>
                    <table class='mainTbl' width='100%' border='0' cellpadding='0' cellspacing='0' align='center'>
	                    <tr>
		                    <td width='100%' valign='top' bgcolor='' style='padding-top:20px; padding-right: 2%; padding-left: 2%; background-repeat: no-repeat;'>
                                <!-- One Column -->
			                    <table width='100%' border='0' cellpadding='0' cellspacing='0' align='center' class='deviceWidth' style='margin:0 auto;'>
                                    <tr>
                                        <td width='100%' style='max-width: 680px; width: 100%;'>
                                            <p style='margin-top: 15px; margin-bottom: 0; font-family: Calibri, arial, sans-serif; font-size:18px; font-weight: bold;'>
                                                Mike,
                                            </p>
                                            <p style='margin-top: 15px; margin-bottom: 0; font-family: Calibri, arial, sans-serif; font-size:18px;'>
                                                " . Trim(stripslashes($message)) . "
                                            </p>
                                            <p style='margin-top: 15px; margin-bottom: 0; font-family: Calibri, arial, sans-serif; font-size:18px;'>
                                                Thank you,
                                            </p>
                                            <p style='margin-top: 0px; margin-bottom: 0; font-family: Calibri, arial, sans-serif; font-size:18px;'>
                                                $first_name $last_name
                                            </p>
                                            <p style='margin-top: 15px; margin-bottom: 0; font-family: Calibri, arial, sans-serif; font-size:18px; font-weight: bold;'>
                                                $business_name
                                            </p>
                                            <p style='margin-top: 0px; margin-bottom: 0; font-family: Calibri, arial, sans-serif; font-size:18px;'>
                                                $email
                                            </p>
                                            <p style='margin-top: 0px; margin-bottom: 0; font-family: Calibri, arial, sans-serif; font-size:18px;'>
                                                $telephone
                                            </p>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </body>
                </html>";
                $headers .= "MIME-Version: 1.0\r\n";
                $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
                $headers .= 'From: ' . $first_name . ' ' . $last_name .' <' . $email . '>' . "\r\n";
                $recipient = "robert_vincent@metrographicsanddesign.com";
                $subject = "Website Notification: $business_name Has Sent You a Message";
                mail($recipient, $subject, $formcontent, $headers) or die ("Error!");
                exit(); // Stop the page
            
            }else{ //If it did not run OK
                trigger_error('Your message was not received due to a system error. We apologize for any inconvenience. We will correct the error ASAP.');
            }
		}//End of empty($reg_errors) IF
	}//End of main form submission conditional

	//Need the form functions script, which defines the create_form_input():
	//The file may already have been included by the header
	require_once('./includes/form_functions.inc.php');
?>

<div id="wrapper">
    <div class="w50-l margin-fix">
        <img src="images/contact-mch-telecom-inc-logo-wood-wall.jpg" alt="MCH Telecom Inc logo on a wood wall">
    </div>
    <div class="w50-r margin-fix">
        <h2>LOCATION</h2>
        <ul class="contactUl mt15">
            <li>20876 Oak Tree Dr.</li>
            <li>
                South Lyon, MI 48178
            </li>
        </ul>
        <p class="boldText mt15">
            Phone
        </p>
        <ul class="contactUl">
            <li>
                (734) 123-4567
            </li>
        </ul>
        <p class="boldText mt15">
            Email
        </p>
        <ul class="contactUl">
            <li>
                <a href="mailto:info@mchtelecominc.com">info@mchtelecominc.com</a>
            </li>
        </ul>
        <p class="boldText mt15">
            Hours of Operation
        </p>
        <ul class="contactUl">
            <li>Monday - Friday</li>
            <li>7 AM - 4 PM</li>
        </ul>
    </div>
    <br class="clear-fix">
    <div class="map-fix">
        <iframe class="google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2944.7203411761584!2d-83.63987888460865!3d42.433687238441465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882354358170e091%3A0x78022ef896163412!2s20876+Oak+Tree+Dr%2C+South+Lyon%2C+MI+48178!5e0!3m2!1sen!2sus!4v1553911598964!5m2!1sen!2sus" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    <br class="clear-fix">
    <h3 class="orange ta-center mb20">
        MESSAGE US
    </h3>
    
    <form class="contactForm" id="contactForm" method="post" action="contact.php#contactForm">
        <fieldset>
            <div class="w50-l">
                <?php
                create_form_input('first_name', 'text', 'First Name*', $reg_errors);
                create_form_input('last_name', 'text', 'Last Name*', $reg_errors);
                create_form_input('business_name', 'text', 'Business Name*', $reg_errors);
                //echo '<span class="help-block">Only letters and numbers are allowed</span>';
                create_form_input('email', 'email', 'Email Address*', $reg_errors);
                create_form_input('telephone', 'text', 'Telephone*', $reg_errors);
                ?>
            </div>
            <div class="w50-r">
                <?php
                create_form_input('message', 'textarea', 'Message*', $reg_errors);
                //<textarea id="message" name="message" required="yes"></textarea>
                ?>
                <button class="vsBtn" type="submit" name="submit" value="SUBMIT">SUBMIT</button>
            </div>
        </fieldset>
    </form>
</div>
<?php
    include "includes/footer-template.php";
?>