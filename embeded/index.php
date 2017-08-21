<?php
	require_once("../inc/include.php");
	if(!$t->uid)
		{ $PAGE = "login.php"; }
		
	$URL = rawurlencode(urldecode($_GET["url"]));
		
	require_once("../static/tpl/embeded/wrapper.php");
