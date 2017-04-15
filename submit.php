<?php
    $to = "teamapollotech@gmail.com";
    $from = $_POST['email'];
    $name=$_POST['name'];
    $tel=$_POST['phone'];
    
    if ($name != '' && $from != '') {
        $subject = 'Inquiry from Apollo Website';
        $date = date('Y-m-d H:i:s');
        $price=$_POST['user'];
        $exp=$_POST['experience'];
    
        $content = "Name: $name\n";
        $content .= "Email: $from\n";
        $content .= "Phone: $tel\n\n";
        $content .= "Would like to be a: $user\n";
        $content .= "Has prior experience: $exp\n";
        if ($exp == 'Yes') {
            $past=$_POST['past'];
            $content .= "\tPast Tutoring Service: $past";
            if ($past == 'Other') {
                $other=$_POST['other'];
                $content .= ": $other";
            }
            $content .= "\n";
            if ($user == 'Tutor') {
                $stpersm=$_POST['stpersm'];
                $content .= "\tHow many students per semester: $stpersm\n";
            }
        } elseif ($exp == 'No' && $user == 'Tutor') {
                $file=$_POST['file'];
                $content .= "\tTranscript: $file\n";
        }
        
        $price=$_POST['price'];
        $group=$_POST['group'];

        $content .= "Preferred hourly rate: $price\n";
        $content .= "Preferred group session: $group\n";
        
        $headers = "From: $name <$from>";
        if (mail($to,$subject,$content,$headers)) {
            http_response_code(200);
        } else {
            http_response_code(500);
        }
    } else {
        http_response_code(400);
    }
?>