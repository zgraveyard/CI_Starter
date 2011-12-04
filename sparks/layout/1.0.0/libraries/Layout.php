<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Layout Class
 *
 * This class manages the view insertion into a layout template
 *
 * @package		Layout
 * @version		1.0
 * @author 		Richard Davey <info@richarddavey.com>
 * @copyright 	Copyright (c) 2011, Richard Davey
 * @link		https://github.com/richarddavey/codeigniter-layout
 */
class Layout {
	
	/**
	 * Default values
	 *
     */
	private $active         = TRUE;
	private $layout         = 'default';
	private $layout_var     = 'content';
	private $layout_dir     = 'layouts/';
	private $clean_output   = FALSE;
	
	/**
	 * Constructor
	 *
	 * @access	public
	 * @param	array	initialization parameters
	 */
	public function __construct($params = array())
	{
		if (count($params) > 0)
		{
			$this->initialize($params);
		}
		
		log_message('debug', "Layout Class Initialized");
	}

	// --------------------------------------------------------------------

	/**
	 * Initialize Preferences
	 *
	 * @access	public
	 * @param	array	initialization parameters
	 * @return	void
	 */
	private function initialize($params = array())
	{
		if (count($params) > 0)
		{
			foreach ($params as $key => $val)
			{
				if (isset($this->$key))
				{
					$this->$key = $val;
				}
			}
		}
	}
	
	// --------------------------------------------------------------------

	/**
	 * Getter method for private vars
	 *
	 * @param 	string
	 * @return 	mixed
	 */
	public function __get($name) 
	{
		// get variable
		return isset($this->$name) ? $this->$name : NULL;
	}
	
	// --------------------------------------------------------------------

	/**
	 * Disable output cleaning
	 *
	 * @return 	void
	 */
	public function disable_clean_output()
	{
		// disable layout
		$this->clean_output = FALSE;
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * Disable layout
	 *
	 * @return 	void
	 */
	public function disable_layout()
	{
		// disable layout
		$this->active = FALSE;
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * Enable layout
	 *
	 * @return	void
	 */
	public function enable_layout()
	{
		// enable layout
		$this->active = TRUE;
	}
	
	// --------------------------------------------------------------------

	/**
	 * Set layout
	 *
	 * @param 	string $layout
	 * @return 	void
	 */
	public function set_layout($layout)
	{
		// set layout
		$this->layout = $layout;
	}
	
	// --------------------------------------------------------------------

	/**
	 * Set layout directory
	 *
	 * @param 	string $layout_dir
	 * @return 	void
	 */
	public function set_layout_dir($layout_dir)
	{
		// set layout directory
		$this->layout_dir = $layout_dir;
	}

	// --------------------------------------------------------------------

	/**
	 * Output with layout
	 *
	 * Remove useless whitespace from generated HTML and construct page from
	 * template with layout and current set output
	 *
	 * @return 	void
	 */
	public function output()
	{
		// set up CI classes
		$CI =& get_instance();
		
		// get output
		$buffer = $CI->output->get_output();
			
		// does layout exist
		if ($CI->layout->active AND $CI->layout->layout AND file_exists(APPPATH . $CI->layout->layout_dir . $CI->layout->layout . EXT)) {
		
			// return layout
			$buffer = $CI->load->view('../' . $CI->layout->layout_dir . $CI->layout->layout . EXT, array($CI->layout->layout_var => $buffer), TRUE);
		}
		
		// if whitespace compression is needed
		if ($CI->layout->clean_output) {
			
			// search
			$search = array(
				'/\>[^\S \t]+/s', 				// strip whitespaces after tags, except space and tab
			    '/[^\S ]+\</s',					// strip whitespaces before tags, except space
			    '/(\s)+/s',    					// shorten multiple whitespace sequences
			    '#\/\/\<\!\[CDATA\[[^\S ]+#s'	// strip whitespace directly after CDATA
			);
			
			// replace
			$replace = array(
				'>',
			    '<',
			    '\\1',
			    '//<![CDATA['
			);
			
			// run search and replace
			$buffer = preg_replace($search, $replace, $buffer);
			
			// resolve cdata content
			$buffer = str_replace('//<![CDATA[', '//<![CDATA[' . PHP_EOL, $buffer);
		}
		
		// set output
		$CI->output->set_output($buffer);
			
		// display output
		$CI->output->_display();
	}
	
}
// END Layout Class

/* End of file Layout.php */
/* Location: ./application/libraries/Layout.php */