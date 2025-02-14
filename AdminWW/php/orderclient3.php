<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Dubai Books | User</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
		
		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="assets/css/feathericon.min.css">
		
		<!-- Datatables CSS -->
		<link rel="stylesheet" href="assets/plugins/datatables/dataTables.bootstrap4.min.css">
		<link rel="stylesheet" href="assets/plugins/datatables/responsive.bootstrap4.min.css">
		<link rel="stylesheet" href="assets/plugins/datatables/select.bootstrap4.min.css">
		<link rel="stylesheet" href="assets/plugins/datatables/buttons.bootstrap4.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
		
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
    </head>

	<div id="mainContent" style="width: 100%">
		<div id="header" style="border-bottom:2px solid #DDEEFF; display:block; height: 75px; padding-top: 25px; text-align: center; width: 100%">
		<h1>Order Status</h1>
		</div>
	<div id="bodyContent">

<?php 

//get wsdl from registry table
include ("connect.php");

if(!$conn->connect_error)
{
//echo "Connected to db";

//change to the restaurant chosen by user
//$srchkey=$_POST["rstname"];
$srchkey="Plutonium";

$sqlQuery = "SELECT * FROM `registry` WHERE supname like '%$srchkey%';";//='$srchkey';";
$result=$conn->query($sqlQuery);
if ($result)
{
//Record found
	$row = $result->fetch_assoc();
	$wsdl_url = $row["wsdlurl"];

$bookid = trim($_POST['title']);
$customerid = trim($_POST['cname']);
$bookQuantity = trim($_POST['qty']);
$cardNumber = trim($_POST['cno']);
$address = trim($_POST['address']);


// SOAP Request
//	$wsdl_url = "http://localhost/Dubai_Books/Banbury/service.wsdl";
	$client = new SoapClient($wsdl_url);

	// Execute the web service function defined in service.php on the web service server
try
{
	$returnedData = $client->proceedNewRequestBook($bookid, $customerid, $bookQuantity, $cardNumber, $address, array("trace" => 1, "exception" => 0));
	echo $returnedData;

	echo '<a href="userdashboard.php" class="btn btn-primary">Click to go back</a>';
}
catch (SoapFault $soapFault)
{
    var_dump($soapFault);
    echo "$client->__getLastRequest()<br/>";
    echo "$client->__getLastResponse()<br/>";
}

libxml_use_internal_errors(true);// to catch xml conversion error
$res = simplexml_load_string($returnedData);//or die("Error: Cannot create object");

if ($res === false)
{
    echo "Failed loading XML: ";
    foreach(libxml_get_errors() as $error)
		{
        echo "<br>", $error->message;
		}

}
else
{   // Valid XML, Display the returned value
    //echo "<pre>";
		//print_r($res);// shows objects if conversion succeeded else nothing

	foreach ($res->ORDER as $b)
	{
	        echo "<br/>$b->MSG  $b->CODE";

  }
}//Valid XML
}// supplier found

}//db connected

libxml_use_internal_errors(false);
?>