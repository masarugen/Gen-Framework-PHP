<?php
function nowstr() {
	$str_time = date('Y-m-d H:i:s');
	return $str_time;
}
function isIphone() {
	$gen =& get_instance();
	return $gen->http->isIphone();
}
