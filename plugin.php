<?php
/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * Disqus plugin for Omeka
 *
 * Use the Disqus service to allow users to comment on Omeka Items
 *
 * @package    omeka
 * @subpackage Disqus
 * @author     Scholars' Lab
 * @copyright  2011 
 * @license    Apache 2.0
 *
 * PHP 5
 */
?>

<?php
// {{{ constants
define('DISQUS_PLUGIN_VERSION', get_plugin_ini('Disqus', 'version');
define('DISQUS_PLUGIN_DIR', dirname(__FILE__));
// }}}

// {{{ hooks
add_plugin_hook('install', 'disqus_install');
add_plugin_hook('uninstall', 'disqus_uninstall');
add_plugin_hook('config_form', 'disqus_config_form');
add_plugin_hook('config', 'disqus_config');
// }}}

function disqus_install()
{
  set_option('disqus_version', DISQUS_PLUGIN_VERSION);
}

function disqus_unisntall()
{
  delete_option('disqus_version');
}

function disqus_config()
{
  set_option('disqus_shortname', urlencode(trim($_POST['disqus_shortname']));
}

function disqus_config_form()
{
  echo '<div id="disqus_config_form">'
  echo '<label for="disqus_shortname">Website Shortname:</label>'
  echo text(array('name' => 'disqus_shortname', get_option('disqus_shortname')));
  echo '</div>'
}

/*
 * Local variables:
 * tab-width: 4
 * c-basic-offset: 4
 * c-hanging-comment-ender-p: nil
 * End:
 */




