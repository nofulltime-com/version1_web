<?php

require('config.php');

session_start();
$conn = mysqli_connect($host, $username, $password, $dbname);


require('razorpay-php/Razorpay.php');

use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

$success = true;

$error = "Payment Failed";

if (empty($_POST['razorpay_payment_id']) === false) {
    $api = new Api($keyId, $keySecret);

    try {
        // Please note that the razorpay order ID must
        // come from a trusted source (session here, but
        // could be database or something else)
        $attributes = array(
            'razorpay_order_id' => $_SESSION['razorpay_order_id'],
            'razorpay_payment_id' => $_POST['razorpay_payment_id'],
            'razorpay_signature' => $_POST['razorpay_signature']
        );

        $api->utility->verifyPaymentSignature($attributes);
    } catch (SignatureVerificationError $e) {
        $success = false;
        $error = 'Razorpay Error : ' . $e->getMessage();
    }
}

if ($success === true) {
    $razorpay_order_id = $_SESSION['razorpay_order_id'];
    $razorpay_payment_id = $_POST['razorpay_payment_id'];
    $Recruiter_Id = $_SESSION['recruiter_id'];
    $Amount = $_SESSION['amount'];
    $CGST = $_SESSION['cgst'];
    $SGST = $_SESSION['sgst'];
    $Total_Amount = $_SESSION['total'];

    $sql = "INSERT INTO `payment_details` (id,payment_id, recruiter_id,date_of_payment, amount, cgst, sgst,total) VALUES (NULL,'$razorpay_payment_id', '$Recruiter_Id', '$Amount', '$CGST', '$SGST', '$Total_Amount')";
    //THE VALUE OF id IS SET TO NULL AS IT'S AUTO INCREMENT FIELD
    mysqli_query($conn, $sql);

    $html = "<p>Your payment was successful</p>
             <p>Payment ID: {$_POST['razorpay_payment_id']}</p>";
} else {
    $html = "<p>Your payment failed</p>
             <p>{$error}</p>";
}

echo $html;
