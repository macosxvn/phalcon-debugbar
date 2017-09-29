<?php
/**
 * Copyright (c) 2017 Phalcon Debugbar
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 */

/**
 * @author Nguyen Van Thiep
 * Date: 25/06/2017
 * Time: 17:01
 */

namespace Macosxvn\Debugbar;

class Config {
    // Constants of config variables
    const CONFIG_ENABLED = "enabled";
    const CONFIG_COLLECTORS = "collectors";

    //Define javascript & css vendor
    const CONFIG_VENDOR = "vendor";
    const VENDOR_JQUERY = "jquery";
    const VENDOR_FONTAWESOME = "fontawesome";
    const VENDOR_HIGHLIGHTJS = "highlightjs";

    // constants of collector name
    const COLLECTOR_CONFIG = "phalcon_config";
    const COLLECTOR_DB = "database";
    const COLLECTOR_VIEW = "view";
    const COLLECTOR_SESSION = "session";
    const COLLECTOR_REQUEST = "request";
    const COLLECTOR_LOG = "log";
    const COLLECTOR_MESSAGES = "messages";
    const COLLECTORS = [self::COLLECTOR_CONFIG, self::COLLECTOR_DB, self::COLLECTOR_VIEW, self::COLLECTOR_SESSION, self::COLLECTOR_REQUEST];

    /**
     * @return \Phalcon\Config
     */
    public static function getDefaultConfig() {
        return new \Phalcon\Config([
            self::CONFIG_ENABLED => true,
            // The collectors: db, view, cache, request, session
            self::CONFIG_COLLECTORS => [
                self::COLLECTOR_DB => 'db',
                self::COLLECTOR_VIEW => 'view',
                self::COLLECTOR_SESSION => 'session',
                self::COLLECTOR_REQUEST => 'request',
                self::COLLECTOR_CONFIG => TRUE,
                self::COLLECTOR_MESSAGES => TRUE,
            ],
        ]);
    }
}