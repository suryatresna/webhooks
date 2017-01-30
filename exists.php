<?php

$input = json_decode('[
    {
      "name": "type_resto",
      "values": [
        "street"
      ]
    },
    {
      "name": "own_delivery",
      "values": [
        "no"
      ]
    },
    {
      "name": "email",
      "values": [
        "surya.tresna@gmail.com"
      ]
    },
    {
      "name": "full_name",
      "values": [
        "Surya Tresna Agung"
      ]
    },
    {
      "name": "phone_number",
      "values": [
        "+6281993672667"
      ]
    }
  ]');


function group_data($arr) {
	$temp = [];
	foreach($arr as $key => $val) {
		$temp[$val->name] = $val->values[0];
	}

	return $temp;
}


echo print_r(group_data($input));
echo '\n';