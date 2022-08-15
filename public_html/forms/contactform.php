<?php
// $to = "lin.byuan.gm@gmail.com";
// $to = "nishant.verma1994@gmail.com";
$to = "imrandiva00@gmail.com";
$name = $_POST['name'];
$email = $_POST['email'];
// $subject = $_POST['subject'];
$msg = $_POST['message'];

$message = "<html><head>
<title>KTH Hyperloop Contact Form</title>
</head>
<body>
<p>Hello,</p><br/>
<p>Name :  ".$name."</p>
<p>E-mail : ".$email."</p>
<p>Message:</p>
<p>".$msg."</p><br>
<p>Stay tuned for more queries!</p>
</body>
</html>";

//<p>Subject : ".$subject."</p>

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <kthhyperloop.com>' . "\r\n";

mail($to,$message,$headers);
?>