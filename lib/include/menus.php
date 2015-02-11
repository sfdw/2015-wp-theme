<?php

add_action('admin_menu', 'januas_register_menus');

function januas_register_menus() {
    register_nav_menu('primary', __('Primary Menu', 'januas'));
}

?>