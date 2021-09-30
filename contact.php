<?php
 
 if(isset($_POST['submit'])){
     $mailto = "keexoticsrestoration@gmail.com"; // My email address
     $name = $_POST['Enter your Name'];  // Getting Customer Name
     $from = $_POST['Enter a valid email address']; // Getting customer Email address
     $subject = $_POST['Enter your message'];  // Getting subject line from customer
     $subject2 = "Confirmation: Message Submitted Successfully!
     $message = "Client Name: " . $name . "Wrote the Following Message" "\n". $_POST['message'];
     . "Message: " . "\n" . $_POST['message'];
     $message2 = "Dear " . $name . "\n"
     . "Thank you for contacting us, we will get back to you shortly."."\n\n"
     . "You submitted the following message: ". "\n". $_POST['message']."\n\n"
     . "Regards," . "/n"
  
     $headers = "From:" .  $from; //Customer email
     $headers2 = "From:" . $mailto;  //This will receive to customer
       //PHP mailer function
     $result = mail($mailto, $subject, $message, $headers); //Send email to me
     $result2 = mail($from, $subject2, $message2, $headers2); // sends confirmation email to customers
  
     /* checking if the Mails has sent successfully! */
     if ($result && $result2) {
         $success = "u-form-send-message u-form-send-success";
         /* echo '<script type="text/javascript">alert("Thank you! Your message has been sent.")</script>'; */
     } else {
         $failed = "u-form-send-error u-form-send-message";
         /* echo '<script type="text/javascript">alert("Unable to send your message. Please fix errors then try again. ")</script>'; */
     }
      