<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Sekati CodeIgniter Asset Helper
 *
 * @package		Assets
 * @author		Omondi Kevin && Joshua Bakasa 
 * @copyright	Copyright (c) 2013, Sekati LLC.
 * @license		http://www.opensource.org/licenses/mit-license.php
 * @link		http://sekati.com
 * @version		v1.2.7
 * @filesource
 *
 * @usage 		$autoload['config'] = array('asset');
 * 				$autoload['helper'] = array('asset');
 * @example		<img src="<?=asset_url();?>imgs/photo.jpg" />
 * @example		<?=img('photo.jpg')?>
 *
 * @install		Copy config/asset.php to your CI application/config directory
 *				& helpers/asset_helper.php to your application/helpers/ directory.
 * 				Then add both files as autoloads in application/autoload.php:
 *
 *				$autoload['config'] = array('asset');
 * 				$autoload['helper'] = array('asset');
 *
 *				Autoload CodeIgniter's url_helper in `application/config/autoload.php`:
 *				$autoload['helper'] = array('url');
 *
 * @notes		Organized assets in the top level of your CodeIgniter 2.x app:
 *					- assets/
 *						-- css/
 *						-- download/
 *						-- img/
 *						-- js/
 *						-- less/
 *						-- swf/
 *						-- upload/
 *						-- xml/
 *					- application/
 * 						-- config/asset.php
 * 						-- helpers/asset_helper.php
 */

/*
|--------------------------------------------------------------------------
| Custom Asset Paths for asset_helper.php
|--------------------------------------------------------------------------
|
| URL Paths to static assets library
|
*/

$config['asset_path'] 		= 	'assets/';
$config['css_path'] 		= 	'assets/css/';
$config['download_path'] 	= 	'assets/download/';
$config['less_path'] 		= 	'assets/less/';
$config['js_path'] 			= 	'assets/js/';
$config['img_path'] 		= 	'img/';
$config['swf_path'] 		= 	'assets/swf/';
$config['upload_path'] 		= 	'assets/upload/';
$config['xml_path'] 		= 	'assets/xml/';
$config['plugin_path']		=	'assets/plugins/';
$config['files_path']		=	'assets/files/';

$config['css_files']		=	array(
									array('title' => 'template'		,	'file'	=>	'template.css'),
									array('title' => 'menu'			,	'file'	=>	'menu.css'),
									array('title' => 'footer'		,	'file'	=>	'footer.css'),
									array('title' => 'fonts'		,	'file'	=>	'fonts.css')

									);
$config['js_files']			=	array(
									array('title'	=>	'current_date' 	,	'file'	=>	'date_function.js')
								);
$config['plugin_js_files']	=	array(
									array('title'	=> 	'jquery'		,	'file'	=>	'jquery/jquery-1.11.3.min.js'),
									array('title'	=> 'jsCombo'		,	'file'	=>	'jsCombo-master/base.js'),
									array('title'	=> 'load_jsCombo'	,	'file'	=>	'jsCombo-master/load_jsCombo.js'),
									array('title'	=> 'bootstrap'			,	'file'	=>	'bootstrap/js/bootstrap.js')


								);	
$config['plugin_css_files']	=	array(
									array('title'	=> 'jsCombo_css'			,	'file'	=>	'jsCombo-master/main.css'),
									array('title'	=> 'bootstrap'			,	'file'	=>	'bootstrap/css/bootstrap.css')
									
								);
$config['plugin_php_files']	=	array(
									// array('title'	=> 	'phpexcel'		,			'file'	=>	'PHPExcel/PHPExcel.php'),
								);
/* End of file asset.php */
