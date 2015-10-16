<?php
if (isset($_POST['email']))  {

    // You can access the values posted by jQuery.ajax
    // through the global variable $_POST, like this:
    
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $type = htmlspecialchars($_POST['type']);
    $message = htmlspecialchars($_POST['message']);
    $message = $message . "\r\n---\r\n" . $name . "\r\n" . $email;
    
    $admin_email = "info@supernet.org";
    $subject = "New " . $type . " from SuperNET.org";
    
    
    $headers = 'From: ' . $name . ' <' . $email . '>' . "\r\n" .
    'Reply-To: ' . $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();



    //send email
    mail($admin_email, $subject, $message, $headers);
    
    echo("Message was sent!");

} else  {
    
    echo("No POST data!");
}

