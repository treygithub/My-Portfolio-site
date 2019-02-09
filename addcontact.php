<?php
   include("mylibrary/login.php");
   include("mylibrary/ip-tor-blocker.php");
   getUserHostIP();
   getUserHostIP2();
   getUserHostIP3();
   getUserHostIP4();
   getUserHostIP5();
   getUserHostIP6();
   getUserHostIP7();
   login();
   $visitorIp = getUserIP();
   $denied_ips = ipfreely();
   $status = array_search($visitorIp, $denied_ips);
   
   if($status !== false){  
   header("Location: unauthorized.php");
   die();
   };

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

//ip logger
$ip1 = $_SERVER['REMOTE_ADDR'];
$port1 = $_SERVER['REMOTE_PORT'];
$hostname1 = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$text1 = " ip address is: " . $ip1 . " " . "user port: " . $port1 . " " . "user host: " . $hostname1;
 
   if (get_magic_quotes_gpc())
   {
      $name = stripslashes($name);
      $visitor_email = stripslashes($visitor_email);
      $subject = stripslashes($subject);
      $message = stripslashes($message);
   }
   $name = mysql_real_escape_string($name);
      $visitor_email = mysql_real_escape_string($visitor_email);
      $subject = mysql_real_escape_string($subject);
      $message = mysql_real_escape_string($message);


   $baduser = 0;

   if (trim($name) == '')
      $baduser = 1;

   if (trim($visitor_email) == '')
      $baduser = 2;

   if ($rows != 0)
      $baduser = 3;

   if ($baduser == 0)
   {
  
$query = "INSERT INTO contact (name, email, subject, message) " .


          " VALUES ('$name', '$visitor_email', '$subject', '$message')";

/* $query results are stored into $results variable */
    $result = mysql_query($query) or die('Sorry, we could not process your request to the database at this time');


      if ($result)
      {
         $query = "SELECT LAST_INSERT_ID() from contact";
         $result = mysql_query($query);
         $row = mysql_fetch_array($result);
          header("Location: confirmcontact.inc.php");
      }
      else
      {
         header("Location: baduser3.inc.php");
      }
   } else
   {
      switch($baduser)
      {
         case(1):
            echo "<h2>Please enter a name address</h2>\n";
            break;
         case(2):
            echo "<h2>Please enter a e-mail</h2>\n";
            break;
         case(3):
            echo "<h2>Other problem detected</h2>\n";
            break;
       }
       echo "<a href=\"contact.html\">Try again</a>\n";
   }


//Validate first
if(empty($name)||empty($visitor_email)) 
{
    echo "Name and email are mandatory!";
    exit;
}

if(IsInjected($visitor_email))
{
   header("Location: badrequest.php");
    exit;
}

$email_from = 'Trey@hunecut.com';//<== update the email address
$email_subject = "New Message Portfolio page";
$email_body = "You have received a new message from the user $name \n Subject is: $subject \n email: $visitor_email\n".
    "Message:\n $message\n" .
    " ip address is: $ip1\n user port:  $port1\n  user host: $hostname1\n" . date('F j, Y, g:i a');
    
$to = "trey@hunecut.com";//<== update the email address
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
//Send the email!
mail($to,$email_subject,$email_body,$headers);
//done. redirect to thank-you page.
header("Location: confirmcontact.inc.php");


// Function to validate against any email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}

   
?> 