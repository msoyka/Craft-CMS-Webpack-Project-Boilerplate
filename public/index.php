<?php

/**
 * Path to your craft/ folder
 */
$craftPath = '../craft';


/**
 * Define Craft Templates Path
 */
 $templatePath = './static/templates';
define('CRAFT_TEMPLATES_PATH', $templatePath);


/**
 * Setup Multi-Environment Configs
 *
 * Defines the multi-environment configurations for Craft CMS
 * NOTE: Learn more at https://craftcms.com/docs/multi-environment-configs
 */
switch ($_SERVER['SERVER_NAME']) {

	// Environment: Local
  case 'app.craft-webpack-project-boilerplate.craft.dev' :
    define('CRAFT_ENVIRONMENT', 'local');
    break;

	// Environment: Development
  case '__ADD_DEV_DOMAIN__' :
    define('CRAFT_ENVIRONMENT', 'development');
    break;

	// Environment: Staging
  case '__ADD_STAGING_DOMAIN__' :
    define('CRAFT_ENVIRONMENT', 'staging');
    break;

	// Environment: Production
  case '__ADD_PRODUCTION_DOMAIN__' :
    define('CRAFT_ENVIRONMENT', 'production');
    break;

	// Environment: Default
  default :
    define('CRAFT_ENVIRONMENT', 'local');
    break;
}


/*
* Defines the multi-environment configurations for Craft CMS
* NOTE: Do not edit below this line!!
*/
$path = rtrim($craftPath, '/').'/app/index.php';

if (!is_file($path))
{
	if (function_exists('http_response_code'))
	{
		http_response_code(503);
	}

	exit('Could not find your craft/ folder. Please ensure that <strong><code>$craftPath</code></strong> is set correctly in '.__FILE__);
}

require_once $path;
