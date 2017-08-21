<?php

require_once (dirname( __FILE__ )."/twitter/Twitter.lib.php");

define("TWITTER_KEY", "");
define("TWITTER_SECRET", "");
define("JMP_USER", "");
define("JMP_KEY", "");

require_once (dirname( __FILE__ )."/twitter/Twitter.lib.php");
require_once (dirname( __FILE__ )."/jmp.api.php");
require_once (dirname( __FILE__ )."/shared_cache.php");

$t = new Twitter(TWITTER_KEY, TWITTER_SECRET);
$t->cache = new SharedTwitterCache();
$t->cache->cache_dir = dirname(__FILE__)."/cache";
$TWML = new TWML($t);

mysql_pconnect("", "", "");
mysql_select_db("konekochan_twitter_superpoke");
mysql_query("SET NAMES 'utf8'");