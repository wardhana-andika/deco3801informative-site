<?php
	//add POST validator later for security?
	include('statsGetter.php');
	$getter = new StatsGetter();
	$getter->get_everything();
	
	//outputs json
	echo '{"clicks":[
				{
				"fb":"'.$getter->fb_count.'",
				"twitter":"'.$getter->tw_count.'",
				"insta":"'.$getter->in_count.'",
				"purchase":"'.$getter->buy_count.'"
				}
			],
			"visits":[
				{
				"reg":"'.$getter->hits_count.'",
				"unique":"'.$getter->unique_hits_count.'"
				}
			],
			"interest":[
				{
				"email":"'.$getter->email_count.'",
				"comment":"'.$getter->comment_count.'"
				}
			],
			'.$getter->json_ip.',
			'.$getter->json_platform.',
			'.$getter->json_browser.',
			'.$getter->json_mobile.',
			'.$getter->json_hits_by_hour.',
			'.$getter->json_comments_by_hour.',
			'.$getter->json_signups_by_hour.'
		}';
?>