<?php

class Sample {
	var $gen;
	function __construct() {
		$this->gen =& get_instance();
	}

	function get_sample() {
		$sql = 'SELECT * FROM sample';
		$stmt = $this->gen->pdo->prepare($sql);
		$stmt->execute();
		$ret = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $ret;
	}

}
