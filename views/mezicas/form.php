<?php
$container = '<div id="mezicas_form"><h2>Mezicas</h2>';
$container .= '<div class="div_form_box"><label for="cisloMezicasu">Cislo mezicasu</label>';
$container .= "<select id='cisloMezicasu'>$cisloMezicasu</select></div>";


$container .= '<div class="div_form_box"><label for="number">Startovni cislo</label>
					<div id="nextNumber" onclick="nextNumber()">vyssi</div>
					<input id="number" type="text"><div id="previousNumber" onclick="previousNumber()">nizsi</div></div>';
$container .= '<input type="submit" onclick="mezicasClick()" value="Teď" class="input_now"></div>';

return $container;