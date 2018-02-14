<?php

namespace Neox\FbTop;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class Main
 * @package Neox\FbTop
 */
class Main extends Command
{
    protected function configure()
    {
        $this->setName('fbtop')
            ->setDescription('For aggregating personal facebook activities data');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Hello Facebook User');
    }
}
