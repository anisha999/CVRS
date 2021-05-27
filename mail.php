<?php
$db = mysqli_connect("localhost" , "root", "", "cvrt") or die("Check connection parameters!"); 
// Optionally skip select_db and use: mysqli_connect(host,user,pass,dbname)  
mysqli_select_db($db,"cvrt") or die(mysqli_error($db));
if (mysqli_connect_error()) {
    die ('Failed to connect to MySQL');
} else {
	/*SUCCESS MSG*/
	echo '';
}
$sqlCommand = "SELECT 
        u.id
        , domain_name_owner
        , url
        , DATE_FORMAT(domain_expiry_date, '%e %M %Y') as domain_expiration_date
        , domain_owner_email
        FROM websites u
        WHERE domain_expiry_date BETWEEN CURDATE() AND CURDATE()+INTERVAL 7 DAY
        ";
$query = mysqli_query($db, $sqlCommand) or die (mysqli_error($db));
//fetch the data from the database 
$domainnames[] = "";
$domaindate[] = "";
while ($row = mysqli_fetch_array($query)) {
  $arr_ids[] = $row['id']; // so you can update them later
  $domainnames[] = $row['url'];  // list of expiring URLs
  $domaindate[] = $row['domain_expiration_date'];  // list of expiry dates
  } // that's it for the loop
 if (count($domainnames) > 0 ) { 
  $email = 'chaithrakushal2@gmail.com';
  $headers = "From: noreply@domain.co.uk\r\n";    
  $subject = "Domain Name Expiry Date(s)";
  $email = // whatever it is - if they're all to the same place 
  $message = "The following domains are expiring: \n\n";
  $x = 0;
  while ($x < count($domainnames)) {
    $message .= "URL: " . $domainnames[$x] . "  - expires on: " . $domaindate[$x] . "\n";
    $x++;
    }
  $message .= "Whatever footer, contact details. etc.";
  $to = $email;
  $sendmail = mail($to, $subject, $message, $headers);
  if ($sendmail) {
	echo nl2br($message);
       echo "<b>Email Successfully Sent</b><br><br>";
	} else { 
			    echo "<b>Error in Sending of Email to $to</b><br><br>";
			}
  $sql = "UPDATE websites SET date_notified_of_domain_expiry = NOW() WHERE id IN (";
  $sql .= implode("," , $arr_ids);
  $sql .= ");";
  print $sql;
  $db->query($sql) or die(mysqli_error($db));
  }
// Free the results  
mysqli_free_result($query);
//close the connection
mysqli_close($db);
?>