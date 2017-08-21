<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US">
    <head>
        <title>Poke! on Twitter</title>
        <link rel="shortcut icon" href="/favicon.ico" />
        <link rel="stylesheet" href="/static/style.css" />
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    </head>
    <body>
        <div id="topspan">
            <div id="header" style="text-align:right;">
                <a href="/" id="logo"></a>
                <?php
                if ($t->uid)
                {
                ?>
                <?= $TWML->name(NULL, array ("screennameonly"=>true, "useyou"=>false, "linked"=>false)) ?>
                | <a href="/logout">Logout</a>
                <?php
                }
                else
                {
                ?>
                <a href="/login"><img src="/static/img/login.png" alt="Login" title="Login with Twitter" /></a>
                <?php
                }
                ?>
            </div>
        </div>
        <div id="container">
            <div id="body">
                <?php
                if (file_exists(dirname( __FILE__ )."/".$PAGE))
                {
                    require_once (dirname( __FILE__ )."/".$PAGE);
                } else
                {
                    print ($PAGE);
                }
                ?>
            </div>
            <div id="footer">
                &copy; 2009 <a href="http://www.koneko-chan.net/">子猫ちゃん</a>
                | <a href="/install">Install</a>
            </div>
        </div>
        <!-- SCRIPTS -->
        <script type="text/javascript">
            var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
            document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
        </script>
        <script type="text/javascript">
            try {
                var pageTracker = _gat._getTracker("UA-2330128-14");
                pageTracker._trackPageview();
            } 
            catch (err) {
            }
        </script>
    </body>
</html>
