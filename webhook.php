<?php
$challenge = $_REQUEST['hub_challenge'];
$verify_token = $_REQUEST['hub_verify_token'];

if ($verify_token === 'abc123') {
  echo $challenge;
}

function recursive_array_search($needle,$haystack) {
    foreach($haystack as $key=>$value) {
        $current_value = $value;
        if($needle===$key OR (is_array($value) && ($current_value = recursive_array_search($needle,$value)) !== false)) {
            return $current_value;
        }
    }
    return false;
}

$input = json_decode(file_get_contents('php://input'), true);

if(is_array($input)) {
    if(($lead_id = recursive_array_search('leadgen_id',$input)) !== false) {
	    error_log('Leadgen ID has detected. ID: '.$lead_id);
    }
}
