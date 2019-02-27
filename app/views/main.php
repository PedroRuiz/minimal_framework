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
 * Name: app/views/main.php
 *
 * Purpose: Main view template
 *
 *
 *
 */
?>
<!-- ANIMATE.CSS -->
<html>
<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">
</head>
<body>
  <div class="animated rollIn">
    <img src="https://code.pedroruizhidalgo.es/images/logo.svg" height="150">
  </div>
  <small><a href="https://pedroruizhidalgo.es">Pedro Ruiz Hidalgo's</a></small>
  <h1><?=$title?></h1>
  <h2>It goes!</h2>
  <p>If you can see this page, I congratulate you, your installation is already complete. In fact, the page title is passed as a variable to the main template.</p>
  <p><?=$submain?></p>
  <p>IIt is a good idea to start each template with a php code indicating <code>defined('BASEPATH') OR exit('No direct script access allowed');</code> to prevent it from being displayed directly without entering through <strong>index.php</strong> in the root directory.</p>
  <p>This product was born from the need to use a lightweight framework in a project that necessarily had to run on <a href="https://www.raspberrypi.org/products/raspberry-pi-3-model-b/">raspberry pi 3</a>, but it runs perfectly on both my server and my desktop, of course, under Linux. </p>
</body>

</html>

