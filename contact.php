<?php

if (isset($_POST['submit'])) {

    $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $content=$_POST['msg'];
    require('phpmailer/PHPMailerAutoload.php');
    $mail = new PHPMailer();
    // $subject = "Test Mail using PHP mailer";
    // $content = "<b>This is a test mail using PHP mailer class.</b>";
    $mail->IsSMTP();
    $mail->SMTPDebug = 0;
    $mail->SMTPAuth = TRUE;
    $mail->SMTPSecure = "tls";
    $mail->Port     = 587;  
    $mail->Username = "Your_email";
    $mail->Password = "Your_password";
    $mail->Host     = "smtp.gmail.com";
    $mail->Mailer   = "smtp";
    $mail->SetFrom("$email","Your_name");
    $mail->AddReplyTo("$email", "$name");
    $mail->AddAddress("your_extra_email");
    $mail->Subject = $subject;
    $mail->WordWrap   = 80;
    $mail->MsgHTML($content);
    $mail->IsHTML(true);
    
    if(!$mail->Send()) 
        echo "Problem on sending mail";
    else 
    echo '<script>alert("Mail Sent")</script>';
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salon</title>
    <link rel="icon" href="image/logo.png" type="image/icon type">
    <link href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap" rel="stylesheet">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <p class="display-4 text-center mt-5">Contact US</p>

    <div class="container">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">

                <form action="" method="post">
                    <div class="form-group">
                        <label for="usr">Name</label>
                        <input type="text" class="form-control" id="usr" required placeholder="Enter Name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" required placeholder="Enter Email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="usr">Subject</label>
                        <input type="text" class="form-control" id="usr" required placeholder="Enter Subject" name="subject">
                    </div>
                    <div class="form-group">
                        <label for="msg">Message </label>
                        <textarea class="form-control" rows="5" id="msg" placeholder="Enter Message" name="msg"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block mb-5" name="submit">Send</button>

                </form>
            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>

</body>

</html>