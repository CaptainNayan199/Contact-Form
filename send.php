<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="send.css">
    <script defer src="send.js"></script>
    <title>Contact Us</title>
</head>
<body>
    <?php
     use PHPMailer\PHPMailer\PHPMailer;
     use PHPMailer\PHPMailer\Exception;
     require './includes/PHPMailer.php';
     require './includes/Exception.php';
     require './includes/SMTP.php';
     if(isset($_POST["submit-btn"])){
         // data info
        echo "<div>";
        $name=trim($_POST["name"]);
        $formemail=trim($_POST["email"]);
        $contact=trim($_POST["phone"]);
        $email=""; //Specify the Email Address form where you want to get the contact form data.
        $password=""; //Mentioned the App password that is generated from gmail (Checkout the emailconfig.md for more info)
        $subject=trim($_POST["subject"]);
        $message="Form Submitted By <b>".$name."</b><br/><b>Contact Number:</b> ".$contact."<br/><b>Email:</b>".$formemail."<br/><h2>Message:</h2><br/>".trim($_POST["message"]); //Design Your Own Format for getting the Mail. We have created the simple format for mail.
        $to=""; //Enter the Gmail Where you want to get mail from contact form
        // Sending mail config
        $mail=new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host="smtp.gmail.com";
        $mail->SMTPAuth=true;
        $mail->Username=$email; //Here the mentioned Email is assigned
        $mail->Password=$password; // App password is assigned.
        $mail->Port=465;
        $mail->SMTPSecure="ssl";
        $mail->isHTML(true);
        $mail->setFrom($formemail,$name);
        $mail->addAddress($to);
        $mail->Subject=$subject;
        $mail->Body=$message;
        if($mail->send()){
            echo "<div><h2 id='mssg'>Message sent Successfully! Thank you for the Feedback.🙂🙂🙂</h2>";
        }else{
            echo "<div><h2 id='failure'>Something Went Worng😔😔😔!! Please Try Again</h2>";
        }
        $mail->SMTPClose();
    }else{
        header("Location:contact.html");
    }
    ?>
    <h3 class="main">Automatically redirect to Home Page in <span id="count">5</span></h3>
    <a href="contact.html" id="contact"></a>
    </div>
</body>
</html>