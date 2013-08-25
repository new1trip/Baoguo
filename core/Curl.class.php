<?php
class Curl {
	public $ch;

	public function __construct() {
		$this->initCurlClient();
	}
	private function initCurlClient() {
		$cookie_jar = dirname(__FILE__).'/../cache/tmp.cookie';

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie_jar); //保存  
    	curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie_jar); //读取  

		$this->ch = $ch;
	}
	public function execCurl($url, $post_arr=array()) {
		curl_setopt($this->ch, CURLOPT_URL, $url);
		if($post_arr) {
			curl_setopt($this->ch, CURLOPT_POST, 1);
			curl_setopt($this->ch, CURLOPT_POSTFIELDS, http_build_query($post_arr));
		} else {
			curl_setopt($this->ch, CURLOPT_POST, 0);
		}
		$content = curl_exec($this->ch);
		return $content;
	}
}
