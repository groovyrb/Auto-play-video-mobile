<?php


$to = $_GET['email'];
$name = $_GET['name'];
$add = $_GET['address'];
$subject = "HTML email";

$message = "
<html>
<head>
<title>AMINFOWEB PVT LTD</title>
</head>
<body>
<p>THIS EMAIL IS JUST FOR TESTING</p>
<table>
<tr>
<th>Full Name</th>
<th>Address</th>
</tr>
<tr>
<td>".$add."</td>
<td>".$add."</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <claim@aminfoweb.com>' . "\r\n";
$headers .= 'Cc: david@truthinit.com' . "\r\n";

mail($to,$subject,$message,$headers);
header('Location:http://aminfoweb.com/add?sent=success');

?>