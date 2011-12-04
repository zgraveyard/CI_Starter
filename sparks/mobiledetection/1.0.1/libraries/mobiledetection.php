<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MobileDetection {
	
	private $uaPrefixes = array('w3c ','w3c-','acs-','alav', 'alca', 'amoi',
		'audi', 'avan', 'benq', 'bird', 'blac', 'blaz', 'brew', 'cell', 'cldc',
		'cmd-', 'dang', 'doco', 'eric', 'hipt', 'htc_', 'inno','ipaq','ipod',
		'jigs','kddi','keji','leno','lg-c','lg-d','lg-g','lge-','lg/u','maui',
		'maxo','midp', 'mits','mmef','mobi','mot-','moto', 'mwbp', 'nec-',
		'newt', 'noki', 'palm', 'pana', 'pant','phil','play','port','prox',
		'qwap','sage', 'sams','sany','sch-','sec-','send','seri','sgh-','shar',
		'sie-','siem','smal','smar','sony', 'sph-','symb','t-mo', 'tosh',
		'teli','tim-', 'tsm-','upg1','upsi','vk-v','voda','wap-','wapa','wapi',
		'wapp','wapr','webc','winw','winw','xda ','xda-');
	
	private $deviceSignatures = array('android', 'blackberry', 'hiptop', 'ipod',
		'lge vx', 'midp', 'maemo', 'mmp', 'netfront', 'nintendo DS', 'novarra',
		'openweb', 'opera mobi', 'opera mini', 'palm', 'psp', 'phone',
		'smartphone', 'symbian', 'up.browser', 'up.link', 'wap', 'windows ce');
	
	private $wapHeaders = array('HTTP_X_WAP_PROFILE', 'HTTP_PROFILE');
	
	private $isMobile;
	
	public function __construct() {
		$isMobile = $this->wapDetection();
		if (!$isMobile) $isMobile = $this->checkUserAgentPrefix();
		if (!$isMobile) $isMobile = $this->checkUserAgentContains();
		if (!$isMobile) $isMobile = $this->checkOperamini();
		
		$this->isMobile = $isMobile;
	}
	
	public function isMobile() {
		return $this->isMobile;
	}
	
	/**
	 * Looks for WAP related headers.
	 */
	private function wapDetection() {
		foreach($this->wapHeaders as $header) {
			if (isset($_SERVER[$header]) && strlen($_SERVER[$header])) {
				return true;
			}
		}
		
		if (isset($_SERVER["HTTP_ACCEPT"]) && strpos(strtolower($_SERVER["HTTP_ACCEPT"]), 'wap') !== false) {
			return true;
		}
		
		return false;
	}
	
	private function checkUserAgentPrefix() {
		if ( isset($_SERVER['HTTP_USER_AGENT']) ) {			
			$userPrefix = substr(strtolower($_SERVER['HTTP_USER_AGENT']), 0, 4);
			
			if ( array_search($userPrefix, $this->uaPrefixes) ) return true;			
		}

		return false;
	}
	
	private function checkUserAgentContains() {
		if ( isset($_SERVER['HTTP_USER_AGENT']) ) {
		
			foreach ($this->deviceSignatures as $signature) {
				if ( strpos(strtolower($_SERVER['HTTP_USER_AGENT']), $signature) !== false ) {
					return true;
				}
			}
		}
		
		return false;
	}
	
	private function checkOperamini() {
		if (isset($_SERVER['ALL_HTTP']) && strpos(strtolower($_SERVER['ALL_HTTP']), 'operamini') !== false) {
			return true;
		}
		
		return false;
	}
}