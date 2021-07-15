<?php

require('config.php');

session_start();
$conn = mysqli_connect($host, $username, $password, $dbname);


require('razorpay-php/Razorpay.php');
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

$success = true;

$error = "Payment Failed";

if (empty($_POST['razorpay_payment_id']) === false)
{
    $api = new Api($keyId, $keySecret);

    try
    {
        // Please note that the razorpay order ID must
        // come from a trusted source (session here, but
        // could be database or something else)
        $attributes = array(
            'razorpay_order_id' => $_SESSION['razorpay_order_id'],
            'razorpay_payment_id' => $_POST['razorpay_payment_id'],
            'razorpay_signature' => $_POST['razorpay_signature']
        );

        $api->utility->verifyPaymentSignature($attributes);
    }
    catch(SignatureVerificationError $e)
    {
        $success = false;
        $error = 'Razorpay Error : ' . $e->getMessage();
    }
}

if ($success === true)
{
    $razorpay_order_id = $_SESSION['razorpay_order_id'];
    $razorpay_payment_id = $_POST['razorpay_payment_id'];
    $Recruiter_Id = $_SESSION['Recruiter_Id'];
    $Amount = $_SESSION['Amount'];
    $CGST = $Amount * 9/100;
    $SGST = $Amount * 9/100;
    $Total_Amount = $_SESSION['Total_Amount'];

    $sql = "INSERT INTO payment_details (Payment_Id, Order_Id, Recruiter_Id, Amount, CGST, SGST, Total_Amount) VALUES ('$razorpay_payment_id', '$razorpay_order_id', '$Recruiter_Id', '$Amount', '$CGST', '$SGST', '$Total_Amount')";
    mysqli_query($conn, $sql);
    
    $html = "<p>Your payment was successful</p>
             <p>Payment ID: {$_POST['razorpay_payment_id']}</p>";
}
else
{
    $html = "<p>Your payment failed</p>
             <p>{$error}</p>";
}

echo $html;
