<?php
 /**
  * common
  */

require('libs/Smarty.class.php');

$smarty = new Smarty;

//$smarty->force_compile = true;
$smarty->caching = false;
$smarty->cache_lifetime = 120;
?>
