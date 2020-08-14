## Apa itu Google reCAPTCHA

Google reCAPTCHA membantu melindungi situs web dari aktivitas spam atau perangkat lunak berbahaya.

### Server Requirements

PHP version 5.6 or newer is recommended.

### Installation

- Download CodeIgnitier 3 or newer.

### How to use

- Masukkan file google_captcha_rk in library.
- load library `$this->load->library('google_captcha_rk');`
- input key `$this->google_captcha_rk->setKey('site key','secret key');`
- include script `<script src='https://www.google.com/recaptcha/api.js'></script>` in head html.
- input `<div class="g-recaptcha" data-sitekey="<?= $this->google_captcha_rk->getSiteKey(); ?>"></div>`in form.
- use `$status = $this->google_captcha_rk->validationCaptcha($trim($this->input->post('g-recaptcha-response')));` for check validation.

### Screenshot
![Alt text](https://github.com/wawandx/google_recaptcha_rk/blob/master/screenshot/ss.png?raw=true "reCaptcha")
