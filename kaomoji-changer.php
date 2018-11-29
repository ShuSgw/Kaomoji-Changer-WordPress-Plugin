<?php
/*
Plugin Name: Kaomoji Changer
Description: To change dots into Japanese Kaomoji
Author: Shuhei Shagawa
Author URI: http://shuhei-shagawa.com
Description: My portfolio
Version: 1.0
*/

class Kaomoji_Changer
{
    public function __construct()
    {
        add_filter('the_content', array($this, 'change'));
        add_action('admin_menu', array($this, 'moji_changer'));
    }

    public function change($content)
    {
        $kao_value = get_option('kj_value');

        return str_replace('.', $kao_value, $content);
    }

    public function moji_changer()
    {
        add_menu_page('kaomoji', 'Kaomoji Changer', 'administrator', 'kaomoji', array($this, 'kaomoji_func'), plugin_dir_url(__FILE__).'/icon.png');
    }

    public function kaomoji_func()
    {
        if (isset($_POST['kaomoji'])) {
            update_option('kj_value', $_POST['kaomoji']);
        }
        include 'view.php';
    }
}

$myfunc = new Kaomoji_Changer();
