<?php

/*
 * This file is part of the Malefice Deobfuscation Engine.
 *
 * (c) Elliot Anderson
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Malefice\Analyzer\Command;

use Malefice\Analyzer\Analyzer;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class RunCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('run')
            ->setDescription('Runs the analyzer on source code.')
            ->addArgument('source', InputArgument::REQUIRED, 'The file to analyze.')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Coming soon.');
    }
}