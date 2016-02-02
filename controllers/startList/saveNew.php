<?php
include '../../models/config.php';
include '../../models/helpers.php';
function __autoload($name)
{
	include_once "../../models/classes/$name.class.php";
}

$startList = new StartList();
$err = array();

$date = $startList->dateToTimestamp($_POST['date']);
if($date == 0){
	$err[] = 'Spatn7 format data';
}

$category = $_POST['category'];

$firstNumber = intval ($_POST['firstNumber']);
$lastNumber = intval ($_POST['lastNumber']);

if($firstNumber > $lastNumber){
	$help = $firstNumber;
	$firstNumber = $lastNumber;
	$lastNumber = $help;
}
if($lastNumber == 0 || $lastNumber == ''){
	$lastNumber = 1;
}
if($firstNumber == 0 || $firstNumber == ''){
	$firstNumber = $lastNumber;
}

$sequence = intval ( $_POST['sequence']);

$firstStartTime = $startList->timeAndDateToTimestamp($_POST['timeFirst'], $_POST['date']);

for($firstNumber; $firstNumber <= $lastNumber; $firstNumber++)
{
	$startList->saveNewStartNumber($firstNumber, $category, $firstStartTime);
	//Start for next number
	$firstStartTime = $firstStartTime + $sequence;
}