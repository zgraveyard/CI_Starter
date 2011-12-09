<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <!-- Le fav and touch icons -->
        <link rel="shortcut icon" href="images/favicon.ico">
        <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
        <!-- loading the jquery from google CDN -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <?php display_js(array('bootstrap-alerts.js','bootstrap-buttons.js',
            'bootstrap-dropdown.js','bootstrap-modal.js','bootstrap-popover.js',
            'bootstrap-scrollspy.js','bootstrap-tabs.js','bootstrap-twipsy.js'));?>
        <title>Welcome to CodeIgniter</title>
        <?php display_css(array('default/bootstrap.css', 'default/theme.css')); ?>
    </head>
    <body>

        <div class="topbar">
            <div class="fill">
                <div class="container">
                    <a class="brand" href="https://github.com/linuxjuggler/CI_Starter">CI Starter</a>
                    <ul class="nav">
                        <li class="active"><a href="https://github.com/linuxjuggler/CI_Starter">Home</a></li>
                        <li><a href="https://github.com/linuxjuggler/CI_Starter/blob/master/README.md">About</a></li>
                        <li><a href="https://github.com/linuxjuggler/CI_Starter/issues" id="contact">Report Issue</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <section>
                <?= $content; ?>
            </section>
            <footer>
                <p>&copy; Zaher Ghaibeh 2011</p>
            </footer>
        </div> <!-- // end of container //-->

    </body>
</html>