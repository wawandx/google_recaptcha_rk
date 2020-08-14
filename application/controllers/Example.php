<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
class Example extends CI_Controller {
    public function __construct() {
        parent::__construct();
        
        $this->load->helper(array('url','form'));
        $this->load->library(array('session','google_captcha_rk'));
        $this->google_captcha_rk->setKey('site_key','secret_key');
    }    
 
    public function index(){
        $this->load->view('view_example');
    }
  
    public function googleCaptchaStore(){
        $recaptchaResponse = trim($this->input->post('g-recaptcha-response'));
        $status = $this->google_captcha_rk->validationCaptcha($recaptchaResponse);

        if($status['success']){ 
            $this->session->set_flashdata('error', 'Google Recaptcha Successful');
        }else{
            $this->session->set_flashdata('error', 'Sorry Google Recaptcha Unsuccessful!!');
        }
        redirect(base_url('example'));
    }
 
}
