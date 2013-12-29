<?php
$p = isset($_GET['p']) ? $_GET['p'] : 'html/index.html';
$q = isset($_GET['q']) ? $_GET['q'] : '';
if (file_exists($p)) {
	$basehref = dirname($_SERVER['PHP_SELF']) . '/' . dirname($p) . '/';
	$basehref = str_replace('html/', '', $basehref);
	$html = file_get_contents($p);
	$html = str_replace('<head>', '<head><base href="' . $basehref . '">', $html);
	$html = process($html, $q);
	echo $html;
} else {
	echo 'File not found: ' . $p;
}
echo '<pre>' . print_r($_GET, TRUE) . '</pre>';

function process($html, $q) {
	return $html;
}