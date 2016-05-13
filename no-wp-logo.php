<?php
# Plugin Name: No WP Logo
# Version: 0.1.0
# Description: WordPress plugin to disable the wp logo in the admin bar.
# Author: Sebastiaan de Geus
# Author URI: https://www.hoppinger.com/
# Plugin URI: https://github.com/hoppinger/no_wp_logo

require 'lib/no_wp_logo.php';

$no_wp_logo = new NoWPLogo;
$no_wp_logo->actions();
