<?php
include '../../models/config.php';
include '../../models/helpers.php';
function __autoload($name)
{
	include_once "../../models/classes/$name.class.php";
}
$err = array();
$mezicas = new Mezicas();

if($_POST['number'] == "" || $_POST['number'] == "NaN" || $_POST['number'] == 0)
{
	$err[] = 'Spatne zadane cislo!';
}
$competitor = $mezicas->getListForNumber($_POST['number']);
if(!isset($competitor['id']) || $competitor['id']==0)
{
	$err[] = 'Takove cislo ve startovce neni!';
}

if(count($err) < 1)
{
	if(!isset($_POST['cisloMezicasu']) || $_POST['cisloMezicasu'] == 0){
		for($i = 1; $i < 11; $i++)
		{
			if($competitor['mezicas'.$i] == 0 || $competitor['mezicas'.$i] == 0){
				$field = 'mezicas'.$i;
				$mezicasCislo = $i;
				$mezicas->saveNewMezicas($competitor['id'], $_POST['timestamp'], $field);
				break;
			}
			$field = '0';
		}
	} else {
		$field = 'mezicas'.$_POST['cisloMezicasu'];
		$mezicasCislo = $_POST['cisloMezicasu'];
		$mezicas->saveNewMezicas($competitor['id'], $_POST['timestamp'], $field);
	}
} else {
	for($i=0; $i<count($err); $i++){
		echo $err[$i].'<br>';
		exit;
	}
}

$allCategoryCompetitors = $mezicas->getAllCompetitorsFromCategory($competitor['category'], $field);

$competitors = array();
foreach ($allCategoryCompetitors as $categoryCompetitor)
{
	if($categoryCompetitor[$field] == 0){
		$categoryCompetitor[$field] = $categoryCompetitor['startTimestamp'];
	}
	$resultTime = $categoryCompetitor[$field] - $categoryCompetitor['startTimestamp'];

	$competitors[$categoryCompetitor['id']] = $resultTime;
}
asort($competitors);


$table = array();
$i = 1;
$firstTime = 0;
foreach ($competitors as $id => $resultTime)
{
	if($resultTime != 0)
	{
		$athlete = $mezicas->getCompetitor($id);
		$time = $athlete[$field] - $athlete['startTimestamp'];
		$timeInRightForm = date('H:i:s', $time);
		if($firstTime == 0){
			$firstTime = $time;
		}

		$loss = date('i:s', $time - $firstTime);
		if($_POST['number'] == $athlete['number']){
			$table[] = "<tr id='lastNumberAdded'><td>$i</td><td>{$athlete['number']}</td><td>{$athlete['name']}</td><td class='cas'>+$loss</td><td class='cas'>$timeInRightForm</td></tr>";
		} else {
			$table[] = "<tr><td>$i</td><td>{$athlete['number']}</td><td>{$athlete['name']}</td><td class='cas'>+$loss</td><td class='cas'>$timeInRightForm</td></tr>";
		}

		$i++;
	}
}

echo "<h3>Mezicas cislo - $mezicasCislo</h3>";
echo '<table id="mezicasy_tabulka">';
echo '<tr><th class="poradi">poradi</th><th class="stCislo">st. cislo</th><th class="jmeno">jmeno</th><th>ztrata</th><th>cas</th></tr>';
foreach ($table as $table)
{
	echo $table;
}
echo '</table>';

