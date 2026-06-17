<?php

session_start();
include 'db.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

$data = json_decode(
    file_get_contents("php://input"),
    true
);

$donorName = $_SESSION['name'];
$donorEmail = $_SESSION['email'];
$userId = $_SESSION['user_id'];

$campaignId = $data['campaign_id'];
$amount = $data['amount'];
$paymentId = $data['payment_id'];

$sql = "
INSERT INTO donations(
    user_id,
    campaign_id,
    donor_name,
    donar_email,
    amount,
    payment_id
)
VALUES(
    '$userId',
    '$campaignId',
    '$donorName',
    '$donorEmail',
    '$amount',
    '$paymentId'
)";

if(mysqli_query($conn,$sql)){
    echo 'Donation Saved';
}else{
    die(mysqli_error($conn));
}