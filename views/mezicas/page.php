<?php
$container = '';
$container.= '<ul id="startList_navigation">' . $mezicas->getNavigation() . '</ul>';
$container .= $mezicas->getForm();
$container .= '<div id="subpage"></div>';
return $container;