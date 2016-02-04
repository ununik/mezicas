<?php
include '../models/config.php';
include '../models/helpers.php';
function __autoload($name)
{
	include_once "../models/classes/$name.class.php";
}
$mezicas = new Mezicas();
$mezicas->addToNavigation('<li onclick="openSubpage(\'mezicas/results.php\')">Vysledky mezicasu</li>');

$cisloMezicasu = "<option value='0'>auto</option>";
for($i = 1; $i < 11; $i++)
{
	$cisloMezicasu .= "<option value='$i'>$i</option>";
}
$mezicas->setForm(include '../views/mezicas/form.php');


print(include ('../views/mezicas/page.php'));