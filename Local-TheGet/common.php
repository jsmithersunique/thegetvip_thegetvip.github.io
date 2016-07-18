<?php
//for every page!!
// set error behavior, redirect to secure URL, look for subdomain and redirect to www if no subdomain
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if($_SERVER['SERVER_PORT'] != 443) {
   header("HTTP/1.1 301 Moved Permanently");
   header("Location: https://".$_SERVER['HTTP_HOST']);
   exit();
}
$mystart = $_SERVER{'HTTP_HOST'};
$mystart = str_ireplace("/","",$mystart);
$mystart = str_ireplace("http:","",$mystart);
$mystart = str_ireplace("https:","",$mystart);
$mystart = str_ireplace($_SERVER['SCRIPT_NAME'],"",$mystart);
$mystart = str_ireplace("innoc.usio","",$mystart);
$mystart = str_ireplace("innoc.us","",$mystart);
$mystart = str_ireplace("theget.io","",$mystart);
$mystart = str_ireplace(".","",$mystart);
$_SESSION["subd"] = $mystart;
//print $_SESSION["subd"];
if (strlen($mystart) == 0) {
    $_SESSION["subd"] = "www";
    header("Location: https://" . $_SESSION["subd"] . ".theget.io"); /* Redirect browser */
    exit();
}

$conn = new mysqli("localhost", "tvowner", "get.tv.now");
// Check connection
if (!$conn) {
    echo "Connection failed: " . mysqli_connect_error();
}

//phpinfo();
// end pre-processing for common.php
// end pre-processing for common.php
// end pre-processing for common.php
////////////////////////////////////////////////
////////////////////////////////////////////////
////////////////////////////////////////////////
////////////////////////////////////////////////
function sayyes() {
//print '<font color=white>Yes.</font>&nbsp;&nbsp;';
print '<!--'; 

    foreach($_SERVER as $key_name => $key_value) {
            print $key_name . " = " . $key_value . "<br>\n";
    }
print '-->'; 
}




////////////////////////////////////////////////
////////////////////////////////////////////////
function makeCurlStart() {
    
    curl_init();
    print '<font color=white>Curl init-d OK.</font>&nbsp;&nbsp;';
    
}

////////////////////////////////////////////////
////////////////////////////////////////////////
function getxapps(){
// example to get a list of streams active on the server
// https://www.wowza.com/forums/content.php?742-Live-sources-query-examples
// curl -X GET --header 'Accept:application/json; charset=utf-8' http://localhost:8087/v2/servers/_defaultServer_/publishers
// TODO: sort out stream names and app names in curl reuqests
// this will probably be the best way to sort out the various discrete online clients and their streams

 //$myhandle = curl_init("http://localhost:8087/v2/servers/_defaultServer_/publishers");   
 //curl_setopt($myhandle, CURLOPT_HEADER, 1);  // include the header in the output
 //   $headerdefarray = array('Content-type: application/json','charset: utf-8');
    //array(Accept => 'Application/json', charset => 'utf-8')
 //curl_setopt($myhandle, CURLOPT_HTTPHEADER, $headerdefarray);
 //curl_setopt($myhandle, CURLOPT_HTTPAUTH, CURLAUTH_DIGEST); 
 //$toprint = curl_exec($myhandle);
    
// code from: http://stackoverflow.com/questions/37888583/wowza-curl-command-not-authenticating
$username = 'tvowner';
$password = 'get.tv.now';
$data = array(
"restURI" => "http://localhost:8087/v2/servers/_defaultServer_/vhosts/_defaultVHost_/applications",
"serverName" => "_defaultServer_",
        //"sourceStreamName" => "myStream",
        //"application" => "myStream",
        //"streamName"=>   "test",
        "userName" => "tvowner",
        "password"=> "get.tv.now",
        "debugLog"=>"true"
        ); 
$data_string = json_encode($data);
//$url = 'http://localhost:8087/v2/servers/_defaultServer_/vhosts/_defaultVHost_/applications/myStream/pushpublish/mapentries/ppsource';
$url = 'http://localhost:8087/v2/servers/_defaultServer_/vhosts/_defaultVHost_/applications';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($data_string))
);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERPWD, $username . ':' . $password);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_DIGEST);     
$result = curl_exec($ch);
print "\n<!-- API RESULT  RESULT \n" . $result . " -->";
}

////////////////////////////////////////////////
////////////////////////////////////////////////

function justgeturl($a){    
//try {    $mycontent = file($a); }
//catch (Exception $e) { print 'Problem with fetching url: ' . $a . $e->getMessage(); }
    
    $mycontent = file($a);
    $thisstring = implode('',$mycontent);
    print $thisstring;
    return $thisstring;  
}

////////////////////////////////////////////////
////////////////////////////////////////////////
// INE = IsNullor Empty
function INE($question){  
    return (!isset($question) || trim($question)==='');
}
////////////////////////////////////////////////
////////////////////////////////////////////////


////////////////////////////////////////////////
////////////////////////////////////////////////


////////////////////////////////////////////////
////////////////////////////////////////////////


////////////////////////////////////////////////
////////////////////////////////////////////////



////////////////////////////////////////////////
////////////////////////////////////////////////


////////////////////////////////////////////////
////////////////////////////////////////////////


////////////////////////////////////////////////
////////////////////////////////////////////////



////////////////////////////////////////////////
////////////////////////////////////////////////


////////////////////////////////////////////////
////////////////////////////////////////////////


////////////////////////////////////////////////
////////////////////////////////////////////////



////////////////////////////////////////////////
////////////////////////////////////////////////


////////////////////////////////////////////////
////////////////////////////////////////////////


////////////////////////////////////////////////
////////////////////////////////////////////////



////////////////////////////////////////////////
////////////////////////////////////////////////


////////////////////////////////////////////////
////////////////////////////////////////////////


////////////////////////////////////////////////
////////////////////////////////////////////////



////////////////////////////////////////////////
////////////////////////////////////////////////
?>