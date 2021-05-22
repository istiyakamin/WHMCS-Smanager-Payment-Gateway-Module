<?php 

$clientId = '542943689';
$secretKey = 'OmvpDCykC3tEVDsN2Yt9srS4vSHGQTvmMFX9FoocHJpvaL82rskuF0ZtmfxRdL5SEM4rwC8YoYALg9RAJlNklDAAwTde5X4LGbka362RCQLcyVkKpvROXhm3';

$send_params = array(
    'amount' => '12',
    'transaction_id' => 'd3',
    'success_url' => 'https://facebook.com',
    'fail_url' => 'https://facebook.com',
    'customer_name' => 'ami',
    'customer_mobile' => '01862864710',
);

    $url = 'https://api.sheba.xyz/v1/ecom-payment/initiate';

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => $url,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS =>  http_build_query($send_params),
  CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache",
    "client-id: $clientId",
    "client-secret: $secretKey",
  ),
));


$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
 $resp = json_decode($response);
 var_dump($resp->data->link);
}