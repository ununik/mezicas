<?php
include 'models/config.php';
include 'models/helpers.php';
function __autoload($name)
{
	include_once "models/classes/$name.class.php";
}

$html = new HTML();
$html->addScript('<script src="js/ajax.js"></script>');
$html->addScript('<script src="js/page.js"></script>');

$html->addToNavigation('<li onclick="openPage(\'startList.php\')">Startovni listina</li>');
$html->addToNavigation('<li>Mereni mezicasu</li>');

print(include 'views/page.php');