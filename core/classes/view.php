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
 * Name: core/classes/view.php
 *
 * Purpose: View class
 *
 *
 *
 */
class View 
{
  use App;

  const VIEW_FOLDER = BASEPATH . VIEWS_FOLDER;

  private $view;
  private $data;
  private $return_as_string;

  private $buffer;

  function __construct( string $view , array $data = array(), bool $return_as_string = FALSE ) 
  {
    $this->view = self::VIEW_FOLDER . $view . '.php';

    if( file_exists( $this->view ) )
    {
      $this->data = $data;
      $this->return_as_string = $return_as_string;
    }
    else
      die( "{$this->view} file not found");
  }
  function run()
  {
    ob_start();
    extract( $this->data );
    require_once $this->view;
    $this->buffer = ob_get_contents();
    ob_end_clean();

    if( ! $this->return_as_string ) 
      echo $this->buffer;
    else 
      return $this->buffer;
  }
} 


