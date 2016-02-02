<?php
$container = '<table>
		<tr><th>cislo</th><th>jmeno</th><th>cas startu</th><th>kategorie</th></tr>';

foreach ($startList->getStartlistAll() as $list)
{
	$container .= "<tr><td>{$list['number']}</td><td>";
	if($list['name'] == ""){
		$container .= "<span onclick='addName(this, \"{$list['id']}\")'>+</span>";
	} else {
		$container .= $list['name'];
	}
	$container .= "</td><td>";
	$container .= date('h:i:s', $list['startTimestamp']);
	$container .= "</td><td>";
	$container .= $startList->getShortCategory($list['category']);
	$container .= "</td><td></tr>";
}
$container .= "</table>";

return $container;