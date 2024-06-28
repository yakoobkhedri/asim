<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace تماس با ما@example.com with your real receiving email address
  $receiving_email_address = 'تماس با ما@example.com';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $تماس با ما = new PHP_Email_Form;
  $تماس با ما->ajax = true;
  
  $تماس با ما->to = $receiving_email_address;
  $تماس با ما->from_name = $_POST['name'];
  $تماس با ما->from_email = $_POST['email'];
  $تماس با ما->subject = $_POST['subject'];

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $تماس با ما->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

  $تماس با ما->add_message( $_POST['name'], 'From');
  $تماس با ما->add_message( $_POST['email'], 'Email');
  $تماس با ما->add_message( $_POST['message'], 'Message', 10);

  echo $تماس با ما->send();
?>
