<?php

$curl = curl_init();

curl_setopt_array($curl, [
  CURLOPT_URL => "https://www.machinools.com/api/entity/neigh_graph",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "{\n  \"lang\": \"fr\",\n  \"title\": \"banane\",\n  \"nPredLevels\": 0,\n  \"nSuccLevels\": 1,\n  \"reverseData\": false,\n  \"keyword\": \"banane\"\n}",
  CURLOPT_HTTPHEADER => [
    "Content-Type: application/json"
  ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}
