<?php
include '../models/config.php';
include '../models/helpers.php';
function __autoload($name)
{
	include_once "../models/classes/$name.class.php";
}
$startList = new StartList();
$startList->addToNavigation('<li onclick="openSubpage(\'startList/addNewStart.php\')">Pridat startovni sekvenci</li>');
$startList->addToNavigation('<li onclick="openSubpage(\'startList/list.php\')">Nahled startovni listiny</li>');
$startList->addToNavigation('<li onclick="openSubpage(\'startList/clearList.php\')">Vyprazdnit startovni listinu</li>');


print(include ('../views/startList/page.php'));