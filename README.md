# CodeIgniter [ 2.1 ] Starting Point Project

This is a simple CodeIgniter Starter project so that you can start working on Codeigniter as fast as you can.
Additionally there's <a href="http://getsparks.org">Sparks</a> packages installed.

## Sparks Packages

1. Debug-Toolbar : <a href="http://getsparks.org/packages/Debug-Toolbar/versions/HEAD/show">1.0.7</a> [ready to use]
2. Layout : <a href="http://getsparks.org/packages/layout/versions/HEAD/show">1.0.0</a> [ready to use]
3. ion_auth : <a href="http://getsparks.org/packages/ion_auth/versions/HEAD/show">2.1.6</a> [not ready to use]
4. assets : <a href="http://getsparks.org/packages/assets/versions/HEAD/show">1.0.0</a> [not ready to use]
5. curl : <a href="http://getsparks.org/packages/curl/versions/HEAD/show">1.2.1</a>
6. mobiledetection : <a href="http://getsparks.org/packages/mobiledetection/versions/HEAD/show">1.0.1</a> [ready to use*]

*be sure to modify the MY_Controller.php if you want to stop your controller from checking if its a mobile on every request or if you want to redirect it to another site.

## Others
* Twitter bootstrap v2.0.0 : <a href="http://twitter.github.com/bootstrap/">bootstrap</a>.
* jQuery 1.7.1 : <a href="http://jquery.com">jQuery 1.7.1</a> from google CDN.

## Requirements

1. PHP 5.1+
2. Directory structure for the assets files, with a writeable assets/cache directory

## Documentation

Set all your preferences for each package.

In the config directory your will find a config file called 'application.php' try to edit it to fit your requirement.

## Directory structure example

	/application
		/views
            /themes
            	/Default
                	/layouts
	/assets
		/cache
		/css
		/images
		/js
	/sparks
	/system
	/tools
	/user_guide


## Project URL : 
http://git.io/NrzCqA

## ToDO :
1. add more documentation & examples.
2. trying to integrate the <a href="http://s.zah.me/AFy8LM">jquery-ui-bootstrap</a>
3. i will remove the layout library and install the template library which is better.

## Updates [01/02/2012]:
* update to the new Twitter bootstrap, which now has a responsive design.
* fix a problem with the layout library which cause the layout not to be load ( something related to the hooks which can't be loaded from the sparks/layout/1.0.0/config direcctory ), so i had to move it to the main config directory.
* change the default font family to ubuntu font from google webfonts.

## Updates [13/04/2012]:
* updated the new spark manager.
* updated ion_auth library ( you will have to configure it ).
* updated assets library ( you will have to configure it ).
