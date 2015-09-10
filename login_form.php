<br/>
<div class="g-recaptcha" data-sitekey="<?php
if (get_option('reCaptcha_options') && get_option('reCaptcha_options') != array()) {
    echo esc_attr(get_option('reCaptcha_options')['site_key']);
}
?>"></div>
<script src='https://www.google.com/recaptcha/api.js'></script>
<div class="login_error"><?php
    if (isset($_GET['login_error'])) {
        echo 'Please fill reCAPTCHA field.';
    }
    ?></div>
<br/>
