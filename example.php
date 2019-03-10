<?php

require_once 'ziplib.php';
//create instance extractor class
$extractor		=	new Extractor();

//path of archive file
$archivePath	=	'/path/to/archive.zip';
//destination path
$destinationPath = '/destination/dir/';

//extract archive file
$extract 		=	$extractor->extract($archivePath,$destinationPath);

if($extract)
{
	echo $GLOBALS['status']['success'];
}
else
{
	echo $GLOBALS['status']['error'];
}