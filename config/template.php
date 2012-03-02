<?php defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Parser Enabled
|--------------------------------------------------------------------------
|
| Should the Parser library be used for the entire page?
|
| Can be overridden with $this->template->enable_parser(TRUE/FALSE);
|
|   Default: TRUE
|
*/

$config['parser_enabled'] = TRUE;

/*
|--------------------------------------------------------------------------
| Parser Enabled for Body
|--------------------------------------------------------------------------
|
| If the parser is enabled, do you want it to parse the body or not?
|
| Can be overridden with $this->template->enable_parser(TRUE/FALSE);
|
|   Default: FALSE
|
*/

$config['parser_body_enabled'] = FALSE;

/*
|--------------------------------------------------------------------------
| Title Separator
|--------------------------------------------------------------------------
|
| What string should be used to separate title segments sent via $this->template->title('Foo', 'Bar');
|
|   Default: ' | '
|
*/

$config['title_separator'] = ' | ';

/*
|--------------------------------------------------------------------------
| Layout
|--------------------------------------------------------------------------
|
| Which layout file should be used? When combined with theme it will be a layout file in that theme
|
| Change to 'main' to get /application/views/layouts/main.php
|
|   Default: 'default'
|
*/

$config['layout'] = 'default';

/*
|--------------------------------------------------------------------------
| loading config
|--------------------------------------------------------------------------
|	!Work only with Asset library!
|
|	Enable Preloading assets like js, css or partials with meta. 
|	This feature is very helpfull when you loading assets demand on what
|	module or controller or method is load.
|   
|	Algorithm of loading consist of few steps.  
|   	1. load common config
|		2. is_hmvc
|			2.1 load module common config
|			2.3 load controller config
|			2.4 load action config
|		3. else
|			3.1 load controller config
|			3.2 load action config
| 
|	The rules of naming config files.
|	Every config must be in the correspond config folder
|		application -> common.php - the config file for all application
|		application -> modules -> {module_name} -> common_module.php - the config file for all module
|		application -> modules -> {module_name} -> {controller_name} -> {module_name}_{controller_name} - the config file for module controller
|		application -> modules -> {module_name} -> {controller_name} -> {action_name} -> {module_name}_{controller_name}_{action_name} - the config file for module controller action
|  
|	Everybody config has the following structure:
|	
|	* title -> string 
|		the title from "head" section. Can be null.  
|	* layout -> string 
|	* metas 
|		metas['name'] -> assoc array
|			key assign to attribute "name" and value assing to
|			attribute "content" on tag meta
|		metas['http-equiv'] -> assoc array
|		key assign to attribute "http-equiv" and value assign to attribute "content" on tag meta
|	* partials -> assoc array
|		key   - name of partial
|		value - path to partial
|
|	* css
|		css['url']
|		css['path']
|	* js
|		js['url']
|		js['path']
|
|	   
|	Default: FALSE
*/
$config['preload_config'] = false;
/*
|--------------------------------------------------------------------------
| Theme
|--------------------------------------------------------------------------
|
| Which theme to use by default?
|
| Can be overriden with $this->template->set_theme('foo');
|
|   Default: ''
|
*/

$config['theme'] = '';

/*
|--------------------------------------------------------------------------
| Theme Locations
|--------------------------------------------------------------------------
|
| Where should we expect to see themes?
|
|	Default: array(APPPATH.'themes/' => '../themes/')
|
*/

$config['theme_locations'] = array(
	APPPATH.'themes/'
);