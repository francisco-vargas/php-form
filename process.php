
<?php
    
        $firstName = $_POST['firstname'];
        $lastName = $_POST['lastname'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $email_from = "myuser@mysite.com";
        $email_subject = "New form submission";
        $email_body =   "User first name: $firstName.\n".
                        "User last name: $lastName.\n".
                        "User email: $email.\n".
                        "User message: $message.\n";

        $to = "fralva86@gmail.com";

        $headers = "From: $email_from \r\n";
        $headers = "Reply-To: $email \r\n";

        mail($to,$email_subject,$email_body,$headers);

        header("Location: index.html");


?>
