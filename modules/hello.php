<?php
function hello_main(&$qp) {
	$name = $_REQUEST['q'];
	$qp->find(':root .name')->html($name);
	$qp->find(':root input[name="name"]')->attr('value', $name);
	$qp->find(':root form')->attr('action', '../hello.html');
}