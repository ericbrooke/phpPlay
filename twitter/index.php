<?php
	/*File:twitter.php

	This file is part of Assignment 3 for BCIT Comp 1920.

	This file displays tweets from a specific twitter account and allows you to post to it as well.

	Author: Michael Goldberg, Aaron Smith, Eric Brooke, Ethan Haji Mahdi Zadeh Zargar
	Last modified: March 18, 2012
	*/

	//require the twitter library written by @themattharris
	require_once './tmhOAuth.php';
	require_once './tmhUtilities.php';

	//the twitter account to access
	$twitterAccount = 'BCITcomp1920';

	//the twitter OAuth keys for the account above
	$tmhOAuth = new tmhOAuth(array(
	  'consumer_key'    => 'D9AFTdkliLtryZYqiuzBng',
	  'consumer_secret' => '5FYvEtpqOibc0xgOHm6sNZ6rRWi5NTxrTHV9Dld27k',
	  'user_token'      => '523873068-daSOkmFzDMNZo5KastDYWCnbvc3DUETgT8tfGstj',
	  'user_secret'     => 'PsNCGnM731SKKgMOn2dzMcjFrqPWWrNXLbjXkjON9o',
	));

	//echo html document
	echo '
		<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
		<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
			<head>
				<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
				<title>Assignment 3 - COMP 1920</title>
				<link rel="stylesheet" type="text/css" href="./css/style.css" />
			</head>
			<body>
				<div id="wrapper">
					<div id="header">
						<img src="./images/logo_white.png" id="mainlogo">
					</div>
	';

	//if form was filled out with a message, send twitter message
	if(isset($_POST['tweetMessage']) && !empty($_POST['tweetMessage'])){
		$sendTweet = $tmhOAuth->request('POST', $tmhOAuth->url('1/statuses/update'), array(
		  'status' => $_POST['tweetMessage']
		));

		//check success of twitter post (GET response of 200 means success)
		if ($sendTweet == 200) {
		  echo "<div id='tweetResult'>Successfully Posted To Twitter</div>";
		} else {
		  echo "<div id='tweetResult'>Posting To Twitter Failed</div>";
		}
	}

	//form to submit twitter post
	echo "
					<div id='send' class='center'>
						<span>Post to @$twitterAccount</span>
						<form action='{$_SERVER['PHP_SELF']}' method='post'>
							<p>
								<textarea name='tweetMessage' id='tweetMessage' rows='5' cols='50'></textarea>
								<br />
								<input class='left' type='submit' name='submitTweet' id='submitTweet' value='tweet' />
							</p>
						</form>
					</div>

	";

	//get any tweets from twitterAccount
	$getTweets = $tmhOAuth->request('GET', $tmhOAuth->url('1/statuses/user_timeline'), array(
		'screen_name'=>$twitterAccount), false);

	echo "
					<div id='display' class='center'>
	";

	//check success of getting tweets (GET response of 200 means success)
	if ($getTweets == 200) {
		$data = json_decode($tmhOAuth->response['response'], true);
		foreach ($data as $tweet) {
			echo "
						<div class='tweetPost'>
							<img class='profilePic' src={$tweet['user']['profile_image_url']} />
							<span class='screenName'>{$tweet['user']['screen_name']}</span>
							<span class='tweetDate'>{$tweet['user']['created_at']}</span>
							<p class='tweet'>".htmlentities($tweet['text'])."</p>
						</div>
			";
		}
	} else {
		echo "<div class='tweetPost'>";
		echo "Unable to get tweets from @{$twitterAccount}";
		echo "</div>";
	}

	echo "
					</div>
	";


	//closing html
	echo '
					<div id="footer">
						<div class="center">
							Comp1920 - Assignment 3<br />
							Group Members: Michael Goldberg, Aaron Smith, Eric Brooke, Ethan Haji Mahdi Zadeh Zargar
						</div>
					</div>
				</div>
			</body>
		</html>
	';

?>