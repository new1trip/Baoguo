<?php
function getExpressInfo($no) {
	$info = array();
	$post_arr = array('w'=>'blueskyexpress', 'cno'=>$no, 'ntype'=>0);
	$content = curl('http://track.blueskyexpress.com.au/cgi-bin/GInfo.dll?EmmisTrack', $post_arr);
	if(empty($content))
		return $info;
	$pattern = "trackList\w{3,4}\'>(?P<time>.*?)<\/td.*?";
	$pattern .= "trackList\w{3,4}\'(?P<location>.*?)<\/td.*?";
	$pattern .= "trackList\w{3,4}\'(?P<desc>.*?)<\/td.*?";
	preg_match_all('/'.$pattern.'/', $content, $infos);
	if($infos && is_array($infos['time'])) {
		foreach($infos['time'] as $k=>$time) {
		$info[] = array('time'=>$time, 'location'=>$infos['location'][$k], 'desc'=>$infos['location'][$k]);
	/*
	echo " $time";
		echo "$";
*/
		}
	}
	return $info;
}
function curl($url, $post=array()) {
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_URL, $url);
	if($post) {
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post));
	}
	$rst = curl_exec($ch);
	$info = curl_getinfo($ch);
/* 	echo $info['content_type']; */
	return $rst;

}
$info = getExpressInfo('EF623005674MEL');
print_r($info);
