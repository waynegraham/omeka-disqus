<?php

require_once(dirname(__FILE__) . '/lib/omekaapi.php');

define('DISQUS_URL',			    'http://disqus.com/');
define('DISQUS_API_URL',		  DISQUS_URL . 'api/');
define('DISQUS_DOMAIN',			  'disqus.com');
define('DISQUS_IMPORTER_URL',	'http://import.disqus.com/');
define('DISQUS_MEDIA_URL',		'http://disqus.com/media/');
define('DISQUS_RSS_PATH',		  '/latest.rss');
define('DISQUS_CAN_EXPORT',		is_file(dirname(__FILE__) . '/export.php'));
if (!defined('DISQUS_DEBUG')) {
	define('DISQUS_DEBUG', false);
}
define('DISQUS_VERSION',		'2.61');

