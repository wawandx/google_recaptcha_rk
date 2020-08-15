<?php 
/**
 * Google Captcha for Codeigniter
 *
 * @package        	CodeIgniter
 * @subpackage    	Libraries
 * @category    	Libraries
 * @author	        Rachmad Kurniawan
 * 
 * @version		1.0
 * 
 */

class Google_captcha_rk 
{
	private $siteKey;
	private $secretKey;
	
	function setKey($siteKey, $secretKey)
	{
		$this->siteKey = $siteKey;
		$this->secretKey = $secretKey;
	}

	function getSiteKey()
	{
		return $this->siteKey;
	}

	function validationCaptcha($captcha)
	{
		$credential = array(
			'secret' => $this->secretKey,
			'response' => $captcha
		);
		$verify = curl_init();
		curl_setopt($verify, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
		curl_setopt($verify, CURLOPT_POST, true);
		curl_setopt($verify, CURLOPT_POSTFIELDS, http_build_query($credential));
		curl_setopt($verify, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($verify, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($verify);
		
		$status= json_decode($response, true);
		
		return $status;
	}
}

?>
