<?php
class View {

	var $gen;

	function __construct() {
		$this->gen =& get_instance();
	}

	/**
	 * Viewの書き出し
	 */
	function load($file_name, $data) {
		$lower = strtolower($file_name);
		require_once($this->gen->config['viewDir'].$lower.'.php');
		ob_end_flush();
	}

}
