<?php
require_once('core/gen.php');
// 表示データを格納
$data = array();

// 処理
$data['title'] = 'これはサンプルです';
$data['q1'] = $gen->http->getParam('q1', 'q1はありませんでした');

// ライブラリを読み込み
$gen->load('sample');
$data['sample'] = $gen->sample->get_sample();

// 表示するHTMLの呼び出し
$gen->view->load('sample', $data);
