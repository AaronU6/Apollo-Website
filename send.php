<?php
    $to = "teamapollotech@gmail.com";
    $from = $_POST['email'];
    $name = $_POST['name'];
    if ($name != '' && $from != '') {
        $subject = 'Inquiry from Apollo Website';
        $date = date('Y-m-d H:i:s');
        $message = $_POST['message'];
        $content = "Name: $name\n";
        $content .= "Email: $from\n\n";
        $content .= "Message:\n$message";
        
        $headers = "From: teamapollotech@gmail.com <$from>";
        if (mail($to,$subject,$content,$headers)) {
            http_response_code(200);
        } else {
            http_response_code(500);
        }
    } else {
        http_response_code(400);
    }
?>