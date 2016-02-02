<?php
$container = '<h2>Nova startovni sekvence</h2>';
$container .= '<div id="status"></div>';
$container .= '<label for="date">Datum</label>
					<input id="date" type="text" value="' . $date . '">';
$container .= '<label for="category">kategorie</label>
					<select id="category">' . $optionCategories . '</select>';
$container .= '<label for="firstNumber">Prvni cislo</label>
					<input id="firstNumber" type="text">';
$container .= '<label for="lastNumber">Posledni cislo</label>
					<input id="lastNumber" type="text">';
$container .= '<label for="sequence">Startovni sekvence</label>
					start po <input id="sequence" type="text"> s';
$container .= '<label for="timeFirst">Start prvniho cisla</label>
					<input id="timeFirst" type="text" value="10:00:30">';
$container .= '<input type="submit" onclick="saveNewStart()">';

return $container;