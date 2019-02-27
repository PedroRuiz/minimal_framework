<?php
declare(strict_types=1);

defined('BASEPATH') OR exit('No direct script access allowed');

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
 * Date: 2019-02-26
 *
 *
 * Name: minimal/core/config.php
 *
 * Purpose: Framework configuration file
 *
 *
 *
 */
/**
 *---------------------------------------------------------------
 * EXIT ERROR CODE
 *---------------------------------------------------------------
 *
 * This constant must containt the exit error code in yout system,
 * usually 1
 *
 */
define( 'EXIT_ERROR_CODE' , 1 );

/**
 *---------------------------------------------------------------
 * EXIT SUCCESS CODE
 *---------------------------------------------------------------
 *
 * This constant must containt the exit success code in yout system,
 * usually 0
 *
 */
define( 'EXIT_SUCCESS_CODE' , 0 );

/**
 *---------------------------------------------------------------
 * SYSTEM PATH
 *---------------------------------------------------------------
 *
 * This constant must contain your system folder path, by default
 * 'system'
 */
define( 'SYSTEM_PATH' , 'core/' );

/**
 *---------------------------------------------------------------
 * APPLICATION FOLDER
 *---------------------------------------------------------------
 *
 * This constant contains the application folder path, by default
 * 'app'
 */
define( 'APPLICATION_FOLDER' , 'app/' );

/**
 *---------------------------------------------------------------
 * VIEWS FOLDER
 *---------------------------------------------------------------
 * 
 * This constant contains, the path of your views, by default
 * 'app/views'
 */
define( 'VIEWS_FOLDER' ,'app/views/' );

/**
 *---------------------------------------------------------------
 * CLASSES FOLDER
 *---------------------------------------------------------------
 * 
 * This constant contains, the path to system classes, by default
 * 'core/classes'
 */
define( 'CLASSES_FOLDER' , SYSTEM_PATH . 'classes/' );

/**
 *---------------------------------------------------------------
 * DEFAULT FUNCTION
 *---------------------------------------------------------------
 * 
 * This constant contains, the path to system classes, by default
 * 'core/classes'
 */
define( 'DEFAULT_FUNCTION' , 'index' );

/**
 *---------------------------------------------------------------
 * DEFAULT CONTROLLER
 *---------------------------------------------------------------
 * 
 * This constant contains, the default controller to be executed
 * by default.
 */
define( 'DEFAULT_CONTROLLER' , 'default' );
