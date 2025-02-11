<?php

$domain = "www.tabsoftmarketing.com";

$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$phone = $_POST['phone'] ?? '';
$brief = $_POST['brief'] ?? '';
$news = $_POST['news'] ?? '';
$route = $_POST['route'] ?? '';
$brand = $_POST['brand'] ?? '';
$tag = $_POST['tag'] ?? '';
$price = $_POST['price'] ?? '';
$website = $_POST['website'] ?? '';
$countrycode = $_POST['countrycode'] ?? '';
$services = $_POST['services'] ?? [];

$service_list = implode(', ', $services);

$data = [
    'name' => $name,
    'email' => $email,
    'phone' => ($countrycode ? "$countrycode $phone" : $phone),
    'brief' => "Lead Type: {$_SESSION['lead_type']} | $brief | $website | Services: $service_list",
    'news' => $news,
    'route' => $route,
    'brand' => $brand,
    'tag' => $tag,
    'price' => $price,
];
if($_REQUEST['phone'] == '5556660606' || $_REQUEST['phone'] == '555-666-0606'){
    exit(header("location:/"));
}
if($_REQUEST["gender"] != ""){
    header("location: /");
    exit();
}
if ($_POST['token'] == $_SESSION['token']) {
$payload=json_encode($data);
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_URL => "https://crm.tealslab.com/api/customer",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 500,
    CURLOPT_FOLLOWLOCATION => false,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => $payload,
    CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json',
    ),
));

$response = curl_exec($curl);
$error = curl_error($curl);
// var_dump($response,$error);
// die;

$decodeResponse = json_decode($response);

$msg = $decodeResponse[1];

$_SESSION['thanksMsg'] = $msg;

header("location:/thank-you/?successMsg=$msg");
}
else{
    exit(header("location:/"));
}

