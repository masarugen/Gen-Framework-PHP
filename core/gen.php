<?php
/**
 * 共通処理
 * 全てこのソースを一度requireしてから処理する
 */
ob_start();

require_once($config['configDir'].'config.php'); // 設定関連
require_once($config['libDir'].'session.php'); // セッション関連
require_once($config['libDir'].'db.php'); // DB接続周関連

/**
 * メインとなるオブジェクト
 */
class Gen {

	public static $instance;
	private $classes = array();

	/**
	 * コンストラクタ
	 */
	public function __construct($config) {
		self::$instance =& $this;
		$this->config = $config;
	}

	/**
	 * 同一オブジェクトを取得するメソッド
	 */
	public static function &get_instance() {
		return self::$instance;
	}

	/**
	 * デストラクタ
	 */
	public function __destruct() {
		if ($this->pdo != null) {
			$this->pdo == null;
		}
	}

	/**
	 * クラス生成
	 */
	function load($class_name) {
		$lower = strtolower($class_name);
		$camel = ucfirst($class_name);
		if (in_array($lower, $this->classes) == false) {
			$this->classes[] = $lower;
			require_once($this->config['libDir'].$lower.'.php');
			$this->$lower = new $camel();
		}
	}
}

/**
 * 同一オブジェクトを生成する為のメソッド
 */
function &get_instance() {
	return Gen::get_instance();
}

/**
 * 同一オブジェクトを生成
 * 同一インスタンスを取得する為にいは以下のようにメソッドを使用する
 * $gen =& get_instance();
 */
$gen = new Gen($config);
$gen->pdo = db_connect($config);

$gen->load('http');
$gen->load('view');
require_once($config['libDir'].'helper.php'); //heler

