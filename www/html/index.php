<?php
include('../aPage.class.php');


$base_folder =
	str_ireplace(
		$_SERVER['DOCUMENT_ROOT'],
		'',
		str_ireplace('index.php', '', $_SERVER["SCRIPT_FILENAME"])
	);

$uri = strtolower(trim(
	explode(
		'?',
		str_ireplace($base_folder, '', $_SERVER['REQUEST_URI'])
	)[0],
	'/'
));

if ($uri == '') {
	$class_name = 'Home';
} else {
	$uri = preg_replace('/[^A-z\d]+/i', '-', $uri);
	$uri_arr = explode('-', $uri);
	$class_name = '';

	foreach ($uri_arr as $val) {
		$class_name .= ucfirst($val);
	}
}

if (!file_exists("../pages/{$class_name}.class.php")) {
	$class_name = 'E404';
	http_response_code(404);
}

include("../pages/{$class_name}.class.php");
$page = new $class_name();
include('../template.inc.php');
