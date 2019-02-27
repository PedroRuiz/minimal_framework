<?php
declare(strict_types=1);

 /**
 * Minimal Framework
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2019, Pedro Ruiz Hidalgo
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	Minimal
 * @author	Pedro Ruiz Hidalgo
 * @copyright	Copyright (c) 2019, Pedro Ruiz Hidalgo (https://pedroruizhidalgo.es)
 * @license	https://opensource.org/licenses/MIT	MIT License
 * @link	https://pedroruizhidalgo.es/minimalframework
 * @since	Version 1.0.0
 * @filesource
 *
 *
 *
 *
 * Date: 2019-02-27
 *
 *
 * Name: core/core.php
 *
 * Purpose: Common functions / actions
 *
 *
 *
 */


if (!ini_get('display_errors')) {
  ini_set('display_errors', '1');
}

error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT & ~E_USER_NOTICE & ~E_USER_DEPRECATED);

define( 'SLASH' , '/');
define( 'BASEPATH' , dirname(__DIR__) . SLASH );
define( 'CORE' , BASEPATH . 'core' .SLASH );


if( ! function_exists( 'exist_dir' ) )
{
/**
 * Get boolean of directory existence
 */

function exists_dir( string $directory ): bool
{
  return boolval( is_dir( $directory) );
}
}
if( ! function_exists( 'exist_file' ) )
{
/**
 * Get boolean of directory existence
 */
function exists_file( $file ): bool 
{
  return boolval( is_file( $file ) );
}
}

if( exists_dir( CORE.'config') )
  (require_once CORE.'config/config.php') or die();
else
  exit('No config file in' .CORE.'config/config.php');



// Check amor
exists_dir(BASEPATH.SYSTEM_PATH)  or die("DOESN'T NOT EXISTS (1) " . BASEPATH.SYSTEM_PATH);
exists_dir(BASEPATH.APPLICATION_FOLDER) or die("DOESN'T NOT EXISTS (2) " . BASEPATH.APPLICATION_FOLDER);
exists_dir(BASEPATH.VIEWS_FOLDER) or die("DOESN'T NOT EXISTS (3) " . BASEPATH.VIEWS_FOLDER);
exists_dir(BASEPATH.CLASSES_FOLDER) or die("DOESN'T NOT EXISTS (4) " . BASEPATH.CLASSES_FOLDER);

//echo exists_file( BASEPATH.CLASSES_FOLDER.'database.php' ) or die('no existe');
include_once( BASEPATH . CLASSES_FOLDER . 'view.php' );
include_once( BASEPATH . CLASSES_FOLDER . 'minimal_controller.php' );

trait App 
{
  private static $instance;
  public $default_function;

  private final function __construct() {}
  private final function __clone() {}
  private final function __wakeup() {}
  
  public final static function get_instance() 
  {   
      if(!self::$instance) {
        self::$instance = new self;    
      }
      
      return self::$instance;
  }
}

