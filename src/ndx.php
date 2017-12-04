<?php
	/*
	echo 'PHP';
	echo PHP_EOL;
	echo $_GET ['q'];
	
	if (isset ($_GET ['action'], $_GET ['target']))
		if (isset ($_GET ['usr'])
			$success = file_get_contents ($_SERVER ['REQUEST_SCHEME'] . '//' . $_SERVER ['HTTP_HOST'] . '/Projects/NoWare/aaa.noware.php/src/authrn/txt/?usr='.$_GET['usr'].';action='.$_GET['action'].';target='.$_GET['target']) != 0;
		else
			$success = file_get_contents ($_SERVER ['REQUEST_SCHEME'] . '//' . $_SERVER ['HTTP_HOST'] . '/Projects/NoWare/aaa.noware.php/src/authrn/txt/?action='.$_GET['action'].';target='.$_GET['target']) != 0;
	else if (isset ($_POST ['action'], $_POST ['target']))
		if (isset ($_POST ['usr'])
			$success = file_get_contents ($_SERVER ['REQUEST_SCHEME'] . '//' . $_SERVER ['HTTP_HOST'] . '/Projects/NoWare/aaa.noware.php/src/authrn/txt/?usr='.$_POST['usr'].';action='.$_POST['action'].';target='.$_POST['target']) != 0;
		else
			$success = file_get_contents ($_SERVER ['REQUEST_SCHEME'] . '//' . $_SERVER ['HTTP_HOST'] . '/Projects/NoWare/aaa.noware.php/src/authrn/txt/?action='.$_POST['action'].';target='.$_POST['target']) != 0;
	
	if ($success)
		include (__DIR__ . DIRECTORY_SEPARATOR . 'true.txt');
	else
		include (__DIR__ . DIRECTORY_SEPARATOR . 'false.txt');
	*/
	
	//require_once ($_SERVER ['REQUEST_SCHEME'] . '://' . $_SERVER ['HTTP_HOST'] . '/lib/tree.noware.php/www.ntt.php');
	//require_once ($_SERVER ['REQUEST_SCHEME'] . '://' . $_SERVER ['HTTP_HOST'] . '/aaa.noware.php/www.usr.init.php');
	require_once (__DIR__ . DIRECTORY_SEPARATOR . 'ntt.init.php');
	
	//var_dump (
	//session_start ()
	//)
	;
	
	//echo '<pre>' . PHP_EOL;
	
	//var_dump ($_SESSION ['ntt']);
	//var_dump ($_GET);
	
	if (isset ($_GET ['key']))
	{
		echo $ntt -> val ($_GET ['key']);
		//echo $_SESSION ['ntt'] -> val (urldecode ($_GET ['name']));
	}
	
	//echo '</pre>' . PHP_EOL;
