<?php
class Http {

	function getParam($key, $default = null) {
		$ret = isset($_SESSION[$key]) ? $_SESSION[$key] : null;
		if ($ret == null) {
			$ret = isset($_POST[$key]) ? $_POST[$key] : null;
		}
		if ($ret == null) {
			$ret = isset($_GET[$key]) ? $_GET[$key] : null;
		}
		if ($ret == null) {
			$ret = $default;
		}
		return $ret;
	}

	function isIphone() {
		$user_agent = $_SERVER['HTTP_USER_AGENT'];
		if (strstr($user_agent, 'iPhone') != false) {
			return true;
		} else {
			return false;
		}
	}

}
