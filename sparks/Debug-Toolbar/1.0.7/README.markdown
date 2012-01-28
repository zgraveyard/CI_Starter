# Forensics for CodeIgniter

Forensics is a high-powered, completely customizable replacement for the CodeIgniter Profiler.

## Requirements
- PHP 5.2+
- CodeIgniter 2 +

## Installing 

Just enable profiler in your controller

	<?php
	class Example_controller extends CI_Controller {
		
		public function index()
		{
			$this->load->spark('Debug-Toolbar/1.x.x');   
			$this->load->library('console');                        
			$this->output->enable_profiler(true);
			Console::log('Hey, this is really cool');
			$this->load->view('welcome_message');
		}
	}



## Forensics Logging

In addition to the normal information that CI's Profiler provides, you now have two new logging commands at your disposal that work with the Forensics Profiler:

	Console::log($data) 

	This function accepts any data type and simply creates a pretty, readable output of the variable, 
	using print_r(). Very handy for logging where you are in the script execution, or outputting the contents 
	of an array, or stdObject to your new 'console'.

	Console::log_memory($variable, $name)

	The log_memory function has two uses.

	1) When no parameters are passed in, it will record the current memory usage of your script. 
	  This is perfect for watching a loop and checking for memory leaks.
	2) If you pass in the $variable and $name parameters, will output the amount of memory that variable 
	   is using to the console. In order to use either of these functions, you must be sure 
	   to load the Console library before you use it.

## Other Tips

You can change the location of the profiler bar by changing the class of the *codeigniter-profiler* div (around line 102) of the *profiler_template* view to one of the following four locations: 'top-right', 'top-left', 'bottom-left', and 'bottom-right'.

## Credits
Many thanks for [lonnieezell](https://github.com/lonnieezell/) :)
