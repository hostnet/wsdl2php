<?php

if($argc != 2)
	die("Usage: php getWeatherForZIP.php <ZIP>");

$DS = DIRECTORY_SEPARATOR;
$dir = dirname(__FILE__).$DS;

$output = array();
$final = exec("php ".$dir."../../src/bin/wsdl2php.php -i http://wsf.cdyne.com/WeatherWS/Weather.asmx?WSDL -o ".$dir, $output);
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
	
	$zip = new GetCityWeatherByZIP();
	$zip->ZIP = $argv[1];
	
	print("Getting weather for ZIP code ".$zip->ZIP."...");
	$response = $client->GetCityWeatherByZIP($zip);
	$result = $response->GetCityWeatherByZIPResult;
	if($result->Success){
		print("[OK]\n\n");
		print("Here is the weather forecast for ".$result->City.", ".$result->State.".\n");
		print("\t".$result->Description."\n");
		print("\t".$result->Temperature." degrees Fahrenheit\n");
		print("\t".$result->RelativeHumidity."% humidity\n");
	}else{
		print("[FAIL]\n");
		print($result->ResponseText."\n");
	}
}catch(SoapFault $e){
	print("[FAIL]");
}

@unlink($filename);

?>