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

$html->addCss("<link rel='stylesheet' href='css/landscape.css' type='text/css' media='screen'/>");

$html->addToNavigation('<li onclick="openPage(\'startList.php\')">Startovni listina</li>');
$html->addToNavigation('<li onclick="openPage(\'mezicas.php\')">Mereni mezicasu</li>');

print(include 'views/page.php');