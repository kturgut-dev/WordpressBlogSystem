<?php
/*
Plugin Name: Google reCAPTCHA Login Verify
Plugin URI: https://kursatturgut.com.tr/wp-extensions/grecaptcha
Description: Google reCAPTCHA tüm versionlarıyla oturum işlemlerinde doğrulama sağlamaktadır.
Version: 1.0.1
Author: Kürşat Turgut
Author URI: https://kursatturgut.com.tr
*/

function add_extension_admin_menu()
{
    add_menu_page("Google reCAPTCHA", "Google reCAPTCHA Settings", "manage_options", "g-recaptcha-manage", "extension_content_generator");
}

add_action("admin_menu", "add_extension_admin_menu");

function g_recatpcha_manager_plugin_styles()
{
    wp_register_style('g-recatpcha-manager', plugins_url('/google-recaptcha/css/g-recatpcha-manager.css', 'google-recaptcha'), array(), false, 'all');
    wp_enqueue_style('g-recatpcha-manager');

    wp_register_style('g-recatpcha-manager-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css", array(), false, 'all');
    wp_enqueue_style('g-recatpcha-manager-bootstrap');
}

add_action('admin_print_styles', 'g_recatpcha_manager_plugin_styles');

function extension_content_generator()
{
?>
    <div class="container mt-3 w-50 float-left">
        <form method="POST">
            <div class="custom-control custom-switch">
                <label class="toggle">
                    <input class="toggle-checkbox" type="checkbox" checked>
                    <div class="toggle-switch"></div>
                    <span class="toggle-label">Google reCAPTCHA aktif mi?</span>
                </label>
            </div>
            <div class="form-group">
                <label for="g_recaptcha_version">Version</label>
                <select class="form-control" id="g_recaptcha_version" name="g_recaptcha_version">
                    <option value="v2">V2</option>
                    <option value="v3">V3</option>
                </select>
            </div>
            <div class="form-group">
                <label for="g_recaptcha_site_key">Site Key</label>
                <input class="form-control" type="text" id="g_recaptcha_site_key" name="g_recaptcha_site_key">
            </div>
            <div class="form-group">
                <label for="g_recaptcha_secret_key">Secret Key</label>
                <input class="form-control" type="text" id="g_recaptcha_secret_key" name="g_recaptcha_secret_key">
            </div>
            <div class="form-group mt-2">
                <button type="submit" class="btn btn-outline-primary">Kaydet</button>
            </div>
        </form>
    </div>
<?php

}
