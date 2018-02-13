<?php
/*
<div class="pull-request">
  <img class='avatar'>
  <h5></h5>
  <p></p>
  <p></p>
</div>
*/

/* Testing
$opts = [
        'http' => [
                'method' => 'GET',
                'header' => [
                        'User-Agent: PHP',
                ]
        ]
];
$context = stream_context_create($opts);
$data = file_get_contents("https://api.github.com/repos/oraclestation/oraclestation/pulls", true, $context);
*/

function getClosedPRs(){
$data = file_get_contents('pulls.json', true);
$jsonArray = json_decode($data, true);

foreach($jsonArray as $k=> $fuck){
  if($k < 5) {
  echo("<div class='pull-request'>
  <a href='{$jsonArray[$k]['user']['url']}'><img class='avatar' src='{$jsonArray[$k]['user']['avatar_url']}'></a>
  <a href='{$jsonArray[$k]['html_url']}'><h5>{$jsonArray[$k]['title']}</h5></a>
  <p>{$jsonArray[$k]['body']}</p>
  <p>By {$jsonArray[$k]['user']['login']}</p>
  </div>
");
  $k++;
  }
  else {
    break;
  }
}
}

?>
