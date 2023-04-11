<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="send.css">
    <!-- <script defer src="send.js"></script> -->
    <title>Contact Us</title>
</head>
<body>
    <?php
     use PHPMailer\PHPMailer\PHPMailer;
     use PHPMailer\PHPMailer\Exception;
     require './includes/PHPMailer.php';
     require './includes/Exception.php';
     require './includes/SMTP.php';
        echo "<div>";
    // if(isset($_POST["submit-btn"])){
        // // data info
        // $name=trim($_POST["name"]);
        // $formemail=trim($_POST["email"]);
        // $contact=trim($_POST["phone"]);
        // $email="";
        // $password="";
        // $subject="Kanakai Suggestion Form Response By ".$name;
        // // echo $subject;
        // $message="Form Submitted <b>".$name."</b><br/><b>Contact Number:</b> ".$contact."<br/><b>Email:</b>".$formemail."<br/><h2>Question:</h2><br/>".trim($_POST["question"])."<br/><br/><h2>Problem:</h2><br/>".trim($_POST["problem"])."<br/><br/><h2>Suggestion:</h2><br/>".trim($_POST["suggestion"])."<br/><br/>Thank you.<br/>By <b>".$name."</b>";
        // $to="";
        // // Sending mail config
        // $mail=new PHPMailer(true);
        // $mail->isSMTP();
        // $mail->Host="smtp.gmail.com";
        // $mail->SMTPAuth=true;
        // $mail->Username=$email;
        // $mail->Password=$password;
        // $mail->Port=465;
        // $mail->SMTPSecure="ssl";
        // $mail->isHTML(true);
        // $mail->setFrom($email,$name);
        // $mail->addAddress($to);
        // $mail->Subject=$subject;
        // $mail->Body=$message;
        // if($mail->send()){
        //     echo "<div><h2 id='mssg'>Message sent Successfully! Thank you for the Feedback.🙂🙂🙂</h2>";
        // }else{
        //     echo "<div><h2 id='failure'>Something Went Worng😔😔😔!! Please Try Again</h2>";
        // }
        // $mail->SMTPClose();
// all code will be written here?

    // }else{
    //     // header("Location:contact.html");
    // }
    ?>
    <h3 class="main">Automatically redirect to Home Page in <span id="count">5</span></h3>
    <a href="contact.html" id="contact"></a>
    </div>
</body>
</html>