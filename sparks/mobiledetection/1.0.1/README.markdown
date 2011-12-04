#### Mobile Device Detection for CodeIgniter
#### by James Constable
me@jamesconstable.co.uk
@weejames

21/04/2011

#### Intro:

This is a lightweight mobile device detection algorithm for CodeIgniter.

#### Installation:

You can either use http://getsparks.org to install via the spark installer.  Visit http://getsparks.org/packages/mobiledetection/versions/HEAD/show to install it.

or

1. Extract the archive you get from here.
2. Put libraries/mobiledetection.php into your applications libraries diectory.


#### Usage:

If you've installed via the spark then add the following to your controller.

`$this->load->spark('mobiledetection');`

or 

`$this->load->library('mobiledetection');`

if you've installed manually.

From there on call the following function to determine if your visitor is using a mobile device.

`$this->mobiledetection->isMobile();`

True is returned if they are, otherwise false is returned.

#### Problems? Suggestions?

Twitter: @weejames
Email: me@jamesconstable.co.uk
Web: http://jamesconstable.co.uk
GitHub: http://github.com/weejames