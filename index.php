<?php
require_once ("inc/include.php");
if (!$t->uid)
{
    $PAGE = "intro.php";
	$q = mysql_query("SELECT * FROM `pokes` ORDER BY `uid` DESC LIMIT 0,10");
	$pokeArray = array();
	while($r = mysql_fetch_assoc($q))
	{
		$i = count($pokeArray);
		$pokeArray[$i] = $r;
	}
}
else
{
	$PAGE = "home.php";
}
require_once ("static/tpl/wrapper.php");
