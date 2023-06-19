<?php

 $phone  = (isset($_REQUEST)) ?  $_REQUEST['ANI'] : "";
// $phone = "07030044000";
 

// var_dump($_REQUEST);

$url = "https://psbcrm.interranetworks.com/psbcrm/service/v4_1/rest.php";
$username = "rita";
$password = "Password123";

function call($method, $parameters, $url)
{
  ob_start();
  $curl_request = curl_init();


  curl_setopt($curl_request, CURLOPT_URL, $url);
  curl_setopt($curl_request, CURLOPT_POST, 1);
  curl_setopt($curl_request, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_0);
  curl_setopt($curl_request, CURLOPT_HEADER, 1);
  curl_setopt($curl_request, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($curl_request, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($curl_request, CURLOPT_FOLLOWLOCATION, 0);


  $jsonEncodedData = json_encode($parameters);



  $post = array(
   "method" => $method,
   "input_type" => "JSON",
   "response_type" => "JSON",
   "rest_data" => $jsonEncodedData
   );

  curl_setopt($curl_request, CURLOPT_POSTFIELDS, $post);

  $result = curl_exec($curl_request);
  var_dump( $post );
  die();

  curl_close($curl_request);

  $result = explode("\r\n\r\n", $result, 2);
  $response = json_decode($result[1]);
  ob_end_flush();


  return $response;
}
    //login ----------------------------------------- 
$login_parameters = array(
 "user_auth" => array(
  "user_name" => $username,
  "password" => md5($password),
  "version" => "1"
  ),
 "application_name" => "RestTest",
 "name_value_list" => array(),
 );

$login_result = call("login", $login_parameters, $url);
// var_dump($login_result); die();

    //get session id
$session_id = $login_result->id;
// var_dump($session_id); die();
$search_by_module_parameters = array(  
  "session" => $session_id,  
  'search_string' => $phone,  
  'modules' => array(  
    'Accounts',  
  ),
  'offset' => 0,  
  'max_results' => 1,  
  'assigned_user_id' => '',  
  'select_fields' => array('id'),  
  'unified_search_only' => false,  
  'favorites' => false  
  );  

$search_by_module_results = call('search_by_module', $search_by_module_parameters, $url);  
// var_dump($search_by_module_results);die();

$val = $search_by_module_results->entry_list['0']->records['0']->id->value;
// echo '<pre>';  
  // print_r($val);  
  // echo '</pre>';  
// var_dump($val);die();
if (!empty($val)) {
   
  header("Location: https://psbcrm.interranetworks.com/psbcrm/index.php?module=Accounts&action=DetailView&record=".$val);  
}
else {
  header("Location: https://psbcrm.interranetworks.com/psbcrm/index.php?module=Accounts&action=EditView&return_module=Accounts&return_action=index&phone_office=".$phone);  
}
?>

