<?php
$p = isset($_GET['p']) ? $_GET['p'] : 'html/index.html';
$q = isset($_GET['q']) ? $_GET['q'] : '';
if (file_exists($p)) {
	require_once 'QueryPath/src/qp.php';

	$basehref = dirname($_SERVER['PHP_SELF']) . '/' . dirname($p) . '/';
  // qp assume source is not utf8
	$qp = qp(utf8_decode(file_get_contents($p)))
		->find('head')
		->prepend('<base href="' . $basehref . '"/>');

	$qp->writeHTML();

} else {
	echo 'File not found: ' . $p;
}
echo '<pre>' . print_r($_GET, TRUE) . '</pre>';