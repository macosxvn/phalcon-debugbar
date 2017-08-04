<?php
/**
 * Copyright (c) 2017 Phalcon Debugbar
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to
 * deal
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
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
 * FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE
 * SOFTWARE.
 */

/**
 * @author macosxvn
 * Date: 04/08/2017
 * Time: 15:22
 */

namespace Macosxvn\Debugbar\Volt;

use Macosxvn\Debugbar\Config;
use Macosxvn\Debugbar\Debugbar;
use Phalcon\DiInterface;
use Phalcon\Mvc\View\Engine\Volt\Compiler;

/**
 * Class MessageFunctionExtension
 *
 * Define Volt function for add message
 *
 * @package Macosxvn\Debugbar\Volt
 */
class MessageFunctionExtension {

    /**
     * @var \Phalcon\DiInterface
     */
    protected $di;

    public function initialize(Compiler $compiler) {
        $di = $this->di;
        $compiler->addFunction("info", function () use ($di) {
        });
    }

    /**
     * @return \Phalcon\DiInterface
     */
    public function getDi() {
        return $this->di;
    }

    /**
     * @param \Phalcon\DiInterface $di
     *
     * @return $this
     */
    public function setDi(DiInterface $di) {
        $this->di = $di;
        return $this;
    }
}