<?php 
    //set validation error flag as false
    $error = false;
    //check if form is submitted
    if (isset($_POST['submit']))
    {
        $name = trim($_POST['txt_name']);
        $fromemail = trim($_POST['txt_email']);
        $subject = trim($_POST['txt_subject']);
        $message = trim($_POST['txt_msg']);

        if (empty($name))
        {
            $error = true;
            $name_error = "Please add your name here";
        }
        if(!filter_var($fromemail,FILTER_VALIDATE_EMAIL))
        {
            $error = true;
            $fromemail_error = "Please add your email adress here";
        }
        if(empty($subject))
        {
            $error = true;
            $subject_error = "Please add your subject here";
        }
        if(empty($message))
        {
            $error = true;
            $message_error = "Please add your message here";
        }
        if (!$error)
        {
            //send mail
            $toemail = "kontakt@denmandigeelg.dk";
            $subject = "Ny besked på en.denmandigeelg.dk";
            $body = "Ny besked på en.denmandigeelg.dk: \n\n Navn: $name \n Fra: $fromemail \n Besked: \n $message";
            $headers = "Fra: $fromemail\n";
            $headers .= "Skriv svar til: $fromemail";
			$headers = "From: noreply@jensz12.com\r\n"; 

            if (mail ($toemail, $subject, $body, $headers))
                $alertmsg  = '<div class="alert alert-success text-center">Your message was sent</div>';
            else
                $alertmsg = '<div class="alert alert-danger text-center">Something went wrong, please try again.</div>';
        }
    }
?>