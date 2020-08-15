## What is Google reCAPTCHA?

Google reCAPTCHA helps protect websites from spam activity or malicious software.

### Server Requirements

PHP version 5.6 or newer is recommended.

### Installation

- Download CodeIgnitier 3 or newer.

### How to use

- Register in https://www.google.com/recaptcha/admin/create for get site key & secret key.
- Put in file google_captcha_rk in library.
- Load library `$this->load->library('google_captcha_rk');`
- Input key `$this->google_captcha_rk->setKey('site key','secret key');`
- Include script `<script src='https://www.google.com/recaptcha/api.js'></script>` in head html.
- Input `<div class="g-recaptcha" data-sitekey="<?= $this->google_captcha_rk->getSiteKey(); ?>"></div>`in form.
- Use `$status = $this->google_captcha_rk->validationCaptcha($trim($this->input->post('g-recaptcha-response')));` for check validation.

### Screenshot
![Alt text](https://github.com/wawandx/google_recaptcha_rk/blob/master/screenshot/ss.png?raw=true "reCaptcha")
