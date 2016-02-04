<?php
$container = '<div id="mezicas_form"><h2>Mezicas</h2>';
$container .= '<div class="div_form_box"><label for="cisloMezicasu">Cislo mezicasu</label>';
$container .= "<select id='cisloMezicasu'>$cisloMezicasu</select></div>";


$container .= '<div class="div_form_box"><label for="number">Startovni cislo</label>
					<input id="number" type="text"></div>';
$container .= '<input type="submit" onclick="mezicasClick()" value="Teď" class="input_now"></div>';

return $container;