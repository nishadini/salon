<?php
session_start();
error_reporting(-1);
ini_set('display_errors', 'On');
 
if (!isset($_GET['code'])) {
 $authUrl = "https://login.microsoftonline.com/bf2c51f4-3849-44a5-9c2f-7b002ca9a168/oauth2/v2.0/authorize?";
 $authUrl .= "client_id=bb07e935-e6bf-4f94-bdbe-40e768a6de10";
 $authUrl .= "&response_type=code";
    //https://webservercilendri.azurewebsites.net/adminhomepage.php
 $authUrl .= "&redirect_uri=https%3A%2F%2Fwebservercilendri.azurewebsites.net%2Fadminhomepage.php";
 $authUrl .= "&response_mode=query";
 $authUrl .= "&scope=openid%20offline_access%20https%3A%2F%2Fgraph.microsoft.com%2Fmail.read";
 $authUrl .= "&state=12345";
 
 header('Location: '.$authUrl);
 exit;
 
} else {
 
 $accesscode = $_GET['code'];
 
 $ch = curl_init();
 curl_setopt($ch, CURLOPT_URL,"https://login.microsoftonline.com/common/oauth2/token");
 curl_setopt($ch, CURLOPT_POST, 1);
 $client_id = "client_id=bb07e935-e6bf-4f94-bdbe-40e768a6de10";
 $client_secret = "7THvlCW3kS~N5a8gpYJ.1jkI.V~_hPS84s";
 curl_setopt($ch, CURLOPT_POSTFIELDS,
 "grant_type=authorization_code&client_id=".$client_id."&redirect_uri=https%3A%2F%2Fwebservercilendri.azurewebsites.net%2Fadminhomepage.php&resource=https%3A%2F%2Fmanagement.azure.com%2F&&code=".$accesscode."&client_secret=".urlencode($client_secret));
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 $server_output = curl_exec ($ch);
 curl_close ($ch); 
 $jsonoutput = json_decode($server_output, true);
 
 $bearertoken = $jsonoutput['access_token'];
 $url = "https://management.azure.com/subscriptions/?api-version=2015-01-01";
 $ch = curl_init($url);
 $User_Agent = 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.43 Safari/537.31';
 $request_headers = array();
 $request_headers[] = 'User-Agent: '. $User_Agent;
 $request_headers[] = 'Accept: application/json';
 $request_headers[] = 'Authorization: Bearer '. $bearertoken;
 curl_setopt($ch, CURLOPT_HTTPHEADER, $request_headers);
 $result = curl_exec($ch);
 curl_close($ch);
 echo $result;
  
}

 
?>