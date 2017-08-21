<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US">
    <head>
        <title>Poke! on Twitter</title>
        <link rel="shortcut icon" href="/favicon.ico" />
        <link rel="stylesheet" href="/static/embeded.css" />
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    </head>
    <body>
    	<div id="wrapper">
        <?php
        if (file_exists(dirname( __FILE__ )."/".$PAGE))
        {
            require_once (dirname( __FILE__ )."/".$PAGE);
        }
        else
        {
            print ($PAGE);
        }
        ?>
		</div>
    </body>
</html>
