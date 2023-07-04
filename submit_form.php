
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $to = 'maria.lozano5252@gmail.com';
  $subject = 'New Attendee';
  $message = 'Name: ' . $_POST['name'] . "\r\n"
           . 'Email: ' . $_POST['email'] . "\r\n"
           . 'Phone: ' . $_POST['phone'] . "\r\n"
           . 'Song: ' . $_POST['song'] . "\r\n"
           . 'Allergy: ' . $_POST['allergy'] . "\r\n"
           . 'Plus Ones: ' . $_POST['num_people'] . "\r\n";
  for ($i = 1; $i <= $_POST['num_people']; $i++) {
    $message .= 'Plus One ' . $i . ' Name: ' . $_POST['plusOneName' . $i] . "\r\n"
              . 'Plus One ' . $i . ' Food Restrictions: ' . $_POST['plusOneRestrictions' . $i] . "\r\n";
  }
  $headers = 'From: maria.lozano5252@gmail.com' . "\r\n" .
             'Reply-To: maria.lozano5252@gmail.com' . "\r\n" .
             'X-Mailer: PHP/' . phpversion();
  mail($to, $subject, $message, $headers);
  header('Location: thanks.html');
  exit;
}
?>