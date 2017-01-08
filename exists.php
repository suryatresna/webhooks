<?php

$input = [
	'entry' => [
		'changes' => [
			'field' => 'leadgen',
			'value'	=> [
				'ad_id'	=> 0,
				'leadgen_id' => 248616672235852
			]
		]
	]
];


function recursive_array_search($needle,$haystack) {
    foreach($haystack as $key=>$value) {
        $current_value = $value;
        if($needle===$key OR (is_array($value) && ($current_value = recursive_array_search($needle,$value)) !== false)) {
            return $current_value;
        }
    }
    return false;
}


if($res = recursive_array_search('leadgen_id',$input)) {
	echo "the key leadgen_id is exists. Leadgen : ".$res." \n";
} else {
	echo "the key its not exist.";
}
