<?php

include 'db.php';

$sql = "SELECT * FROM campaigns WHERE id = 1";

$result = mysqli_query($conn,$sql);

$campaign = mysqli_fetch_assoc($result);

echo $campaign['id'];
?>

<h1><?php echo $campaign['title']; ?></h1>

<p><?php echo $campaign['story']; ?></p>

<h3>Campaigner:
<?php echo $campaign['campaigner_name']; ?>
</h3>

<h3>Beneficiary:
<?php echo $campaign['beneficiary_name']; ?>
</h3>

<h3>Hospital:
<?php echo $campaign['hospital_name']; ?>
</h3>