<?php
session_start();

if (isset($_SESSION['order_confirmation_message'])) {
    echo nl2br(htmlspecialchars($_SESSION['order_confirmation_message']));
    // Clear the message so it doesn't show again on refresh
    unset($_SESSION['order_confirmation_message']);
} else {
    // Redirect to form or show an error message
    header('Location: delivery_form.php');
    exit();
}
?>
