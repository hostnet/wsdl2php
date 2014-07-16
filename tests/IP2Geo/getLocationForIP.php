<?php

if($argc != 2)
	die("Usage: php getLocationForIP.php <IP Address>");

$DS = DIRECTORY_SEPARATOR;
$dir = dirname(__FILE__).$DS;

$output = array();
$final = exec("php ".$dir."../../src/bin/wsdl2php.php -i http://ws.cdyne.com/ip2geo/ip2geo.asmx?wsdl -o ".$dir, $output);
print_r(implode("\n", $output));

$filename = substr($final, 8);
$filename = substr($filename, 0, -5);

print("\n\nIncluding ".$filename."...");
require($filename);
print("[OK]");

$class = substr($filename, 0, -4);

try{
	print("\nConnecting...");
	$client = new $class();
	print("[OK]\n");
	
	$info = new ResolveIP();
	$info->ipAddress = $argv[1];
	$info->licenseKey = 0;
	
	print("Getting geographic location for IP Address: ".$info->ipAddress."...");
	$response = $client->ResolveIP($info);
	$result = $response->ResolveIPResult;
	if($result->Latitude != 0 && $result->Longitude != 0){
		print("[OK]\n\n");
		print("We are ".$result->Certainty."% sure of this information.");
		print("\n\tCity:      ".$result->City);
		print("\n\tState:     ".$result->StateProvince);
		print("\n\tLatitude:  ".$result->Latitude);
		print("\n\tLongitude: ".$result->Longitude);
		print("\n");
	}else{
		print("[FAIL]\nCheck your IP Address and try again.");
	}
}catch(SoapFault $e){
	print("[FAIL]");
}

@unlink($filename);

?>