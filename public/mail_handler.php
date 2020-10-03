<?php 
if(isset($_POST['submit'])){
    $to = "ivansvrga204@gmail.com"; // this is your Email address
    $from = $_POST['contact_email']; // this is the sender's Email address
    $contact_name = $_POST['contact_name'];
    $number = $_POST['number']; // phone number
    $subject = "Mail sa portfolia";
    $contact_message = $contact_name . " (" . $number . ") je napisao/la:" . "\n\n" . $_POST['contact_message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$contact_message,$headers);
    //mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    //echo "Mail Sent. Thank you " . $contact_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
// header("Location: http://www.ivansvrga.com/#Contact");
    // You cannot use header and echo together. It's one or the other.
    }
