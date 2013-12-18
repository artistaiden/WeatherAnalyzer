<?php

function __autoload($classname) {
	$file = str_replace('_', '/', $classname) . '.php';
	require_once $file;
}

?>