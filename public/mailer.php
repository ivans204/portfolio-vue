<?php
if ($_POST) {

    $user_name = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
    $user_email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $content = filter_var($_POST["content"], FILTER_SANITIZE_STRING);
    $recap = filter_var($_POST["g-recaptcha-response"], FILTER_SANITIZE_STRING);

    if (empty($user_name)) {
        $empty[] = "<b>Name</b>";
    }
    if (empty($user_email)) {
        $empty[] = "<b>Email</b>";
    }

    if (empty($content)) {
        $empty[] = "<b>Comments</b>";
    }

    if (!empty($empty)) {
        $output = json_encode(array('type' => 'error', 'text' => implode(", ", $empty) . ' Required!'));
        die($output);
    }

    if (!filter_var($user_email, FILTER_VALIDATE_EMAIL)) { //email validation
        $output = json_encode(array('type' => 'error', 'text' => '<b>' . $user_email . '</b> is an invalid Email, please correct it.'));
        die($output);
    }

    $toEmail = "ivansvrga204@gmail.com";
    $mailHeaders = "From: " . $user_name . "<" . $user_email . ">\r\n";

    $mailBody = "User Name: " . $user_name . "\n";
    $mailBody .= "User Email: " . $user_email . "\n";
    $mailBody .= "Content: " . $content . "\n";


    mail($toEmail, "Contact Mail", $mailBody, $mailHeaders);
}

var_dump($_POST);

