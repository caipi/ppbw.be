<?php


function dernierTweet() {
		
	// Your twitter username.
	$username = "pp_bw";

	// Prefix - some text you want displayed before your latest tweet.
	// (HTML is OK, but be sure to escape quotes with backslashes: for example href=\"link.html\")
	$prefix = "<b>Dernier tweet : </b>";

	// Suffix - some text you want display after your latest tweet. (Same rules as the prefix.)
	$suffix = "";

	$feed = "http://search.twitter.com/search.atom?q=from:" . $username . "&rpp=1";

	function parse_feed($feed) {
		$stepOne = explode("<content type=\"html\">", $feed);
		$stepTwo = explode("</content>", $stepOne[1]);
		$tweet = $stepTwo[0];
		$tweet = str_replace("&lt;", "<", $tweet);
		$tweet = str_replace("&gt;", ">", $tweet);
		return $tweet;
	}

	$twitterFeed = file_get_contents($feed);
	echo stripslashes($prefix) . parse_feed($twitterFeed) . stripslashes($suffix);
}


function derniereModif() {
// Affichera : somefile.txt a été modifié le : December 29 2002 22:16:23.

	$filename = $_SERVER["SCRIPT_FILENAME"] ;
	if (file_exists($filename)) {
		echo "Modifié le " . date ("d.m.Y à H:i:s.", filemtime($filename));
	}

}

?>
