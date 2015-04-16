<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
     $from = 'From: tinyhomesforgood';
$to = 'edwarddeaver4@Gmail.com';
  $subject    = $_POST['subject'];
  $msgsubject = "$subject message from $name";



    $body = "E-Mail: $email\n Message: $message";

if ($_POST['submit']) {
    if ($name != '' && $email != '') {

            if (mail ($to, $msgsubject, $body, $from)) {
                echo '<p>Your message has been sent!</p>
                      <a href="getinvolved.html">Return to A Tiny Home For Good</a>';

            } else {

                echo '<p>Something went wrong, go back and try again!</p>
                       <a href="getinvolved.html">Return to A Tiny Home For Good</a>';

            }
        }
 else {
        echo '<p>You need to fill in all required fields!!</p>';
    }
}
?>
