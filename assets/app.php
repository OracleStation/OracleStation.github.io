<?php
$opts = [
        'http' => [
                'method' => 'GET',
                'header' => [
                        'User-Agent: PHP'
                ]
        ]
];

$oAuthKey = "";
$context = stream_context_create($opts);
$data = file_get_contents("https://api.github.com/repos/oraclestation/oraclestation/pulls", true, $context);
$json_array = json_decode($data);
?>
