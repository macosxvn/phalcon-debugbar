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
 * @author macosxvn
 * Date: 20/06/2017
 * Time: 09:22
 */

namespace Macosxvn\Debugbar\Composer;

use Composer\Script\Event;

/**
 * Class Script
 * @package Macosxvn\Debugbar\Composer
 *
 * Run post-install-cmd to create symlink of debugbar resources in public folder
 * <code>
 *     composer run-script post-install-cmd -d vendor/macosxvn/phalcon-debugbar
 * </code>
 */
class Script {

    /**
     * /!\ NOTE: If change this constant value, please change the same constant in \Macosxvn\Debugbar\Debugbar
     */
    const PUBLIC_URI = '/debugbar';

    /**
     * Note: run composer script in vendor/macosxvn/phalcon-debugbar
     * @param Event $event
     * @throws \Exception
     */
    public static function postInstall(Event $event) {
        $composer = $event->getComposer();
        $vendorDir = $composer->getConfig()->get('vendor-dir');
        $projectDir = dirname(dirname(dirname($vendorDir)));
        if (preg_match("/(vendor)$/", $projectDir)) {
            $projectDir = dirname($projectDir);
        }
        $debugbarResources = $projectDir . "/vendor/maximebf/debugbar/src/DebugBar/Resources";
        if (file_exists($debugbarResources)) {
            $publicDir = $projectDir . "/public";
            if (file_exists($publicDir)) {
                $publicLink = $publicDir . self::PUBLIC_URI;
                @symlink($debugbarResources, $publicLink);
            } else {
                throw new \Exception("Public folder not found");
            }
        } else {
            throw new \Exception("Base debugbar not found");
        }
    }
}