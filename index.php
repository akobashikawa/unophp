<?php
$q = isset($_GET['q']) ? $_GET['q'] : '';

$urls['helloworld'] = array(
	'pattern' => '/^helloworld$/',
	'file' => 'html/helloworld.html' 
);

function get_url($q) {
	global $urls;
	foreach ($urls as $url) {
		if ( preg_match($url['pattern'], $q) ) {
			return $url;
		}
	}
}

$url = get_url($q);
$file = $url['file'];

if (file_exists($file)) {
	require_once 'QueryPath/src/qp.php';

	$basehref = dirname($_SERVER['PHP_SELF']) . '/' . dirname($file) . '/';
  // qp assume source is not utf8
	$qp = qp(utf8_decode(file_get_contents($file)))
		->find('head')
		->prepend('<base href="' . $basehref . '"/>');

	$qp->writeHTML();

} else {
	echo 'File not found: ' . $file;
}
echo '<pre>' . print_r($_GET, TRUE) . '</pre>';
