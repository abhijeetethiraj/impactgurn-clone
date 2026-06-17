<?php

session_start();

$amount = $_GET['amount'] ?? 0;
$paymentId = $_GET['payment_id'] ?? '';
$campaignId = $_GET['campaign_id'] ?? '';

?>

<!DOCTYPE html>
<html>
<head>
    <title>Payment Successful</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="success">

    <center>

        <h1> Payment Successful</h1> <br> 

        <h2>Thank You For Your Donation!</h2> <br> 

        <p>Your contribution will help the patient.</p> <br> 

        <hr>

        <h3>Donor Details</h3><br><br>

        <p>
            <strong>Name:</strong>
            <?php echo $_SESSION['name']; ?>
        </p><br><br>

        <p>
            <strong>Email:</strong>
            <?php echo $_SESSION['email']; ?>
        </p><br><br>

        <hr>

        <h3>Donation Details</h3><br>

        <p>
            <strong>Campaign ID:</strong>
            <?php echo $campaignId; ?>
        </p><br>

        <p>
            <strong>Amount:</strong>
            ₹<?php echo $amount; ?>
        </p><br>

        <p>
            <strong>Payment ID:</strong>
            <?php echo $paymentId; ?>
        </p><br>

        <a href="index.php">
            <button class="back">
                Back to Campaign
            </button>
        </a>

    </center>

</div>

</body>
</html>