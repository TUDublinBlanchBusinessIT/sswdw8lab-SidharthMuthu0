<?php
date_default_timezone_set('Europe/Dublin');
include("Carpolicy.php");
$pNumber = $_POST['policyNumber'];
$yPremium = $_POST['yearlyPremium'];

$myCarpolicy = new CarPolicy($pNumber, $yPremium);

$myCarpolicy->setDateOfLastClaim("2015-10-10");
echo "the policy " . $myCarpolicy;
echo "has " . $myCarpolicy->getTotalYearsNoClaims();
echo "years no claims.";


?>