<?php
if (isset($_POST['submit'])) {
    $to = "milton@odyssey.co.zw"; // Replace with your desired email address
    $from = $_POST['email'];
    $first_name = $_POST['name'];
    $subject = "I would like to become a Member";
    $message = $first_name . " " . $last_name . " wrote the following:\n\n" . $_POST['message'];

    $headers = "From: " . $from;
    mail($to, $subject, $message, $headers);

    // You can also use header('Location: thank_you.php'); to redirect to another page.
    echo "Mail Sent. Thank you, " . $first_name . ", we will contact you shortly.";
}
?>
