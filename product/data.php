<?php
$url = siteURL();
//$data_url = $url . 'data.json';
$data_url = $url . 'api/v1/theme.php';

$resp = curl_request($data_url);
$micro_info = json_decode($resp);

$data_url = $url . 'api/v1/forms.php';

$resp = curl_request($data_url);
$forms = json_decode($resp)->forms;

if(isset($_GET['slug'])) :
    $page_id = $_GET['slug'];
else :
	$page_id = 'home';
endif;

$data_url = $url . 'api/v1/content.php?page_id=' . $page_id;

$resp = curl_request($data_url);
$page_data = json_decode($resp)->page_data;