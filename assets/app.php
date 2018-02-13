
<?php
include ('config.php');

function getClosedPRs()
{
	$opts = ['http' => ['method' => 'GET', 'header' => ['User-Agent: Oracle-Station-Landing', ]]];
	$context = stream_context_create($opts);
	$data = file_get_contents("https://api.github.com/repos/oraclestation/oraclestation/pulls?state=closed&client_id=" . $clientID . '&client_secret=' . $clientSecret, true, $context);
	$jsonArray = json_decode($data, true);
	$mergeStatus = "";
	foreach($jsonArray as $k => $fuck) {
		if ($k < 5) {
			if ($jsonArray[$k]['merged_at'] == null) {
				$mergeStatus = 'images/closed.svg';
			}
			else {
				$mergeStatus = 'images/merged.svg';
			}

			echo ("<div class='pull-request'>
<a href='{$jsonArray[$k]['user']['url']}'><img class='avatar' src='{$jsonArray[$k]['user']['avatar_url']}'></a>
<a href='{$jsonArray[$k]['html_url']}'><h5><img class='mergestatus' src='{$mergeStatus}'>{$jsonArray[$k]['title']}</h5></a>
<p>{$jsonArray[$k]['body']}<br />
By <a href='{$jsonArray[$k]['user']['url']}'>{$jsonArray[$k]['user']['login']}</a></p>
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