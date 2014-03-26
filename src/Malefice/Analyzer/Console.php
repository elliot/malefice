<?php

/*
 * This file is part of the Malefice Deobfuscation Engine.
 *
 * (c) Elliot Anderson
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Malefice\Analyzer;

use Malefice\Analyzer\Command\RunCommand;
use Symfony\Component\Console\Application;

class Console extends Application
{
    protected function getDefaultCommands()
    {
        $commands = parent::getDefaultCommands();
        $commands[] = new RunCommand();

        return $commands;
    }
}