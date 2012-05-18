<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
<div>title:<?php echo $data['title'] ?></div>
<div>q1($_GET['q1']):<?php echo $data['q1'] ?></div>
<pre>sample:<?php var_dump($data['sample']); ?></pre>
<div>now:<?php echo nowstr(); ?></div>

<div><a href="./sample.php?q1=aaa">q1テスト(aaa)</a></div>
<div><a href="./sample.php">q1テスト(値なし)</a></div>
</body>
</html>
