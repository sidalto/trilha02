<?php
/**
 * @author      Webjump Develop Team <dev@webjump.com.br>
 * @copyright   2022 Webjump (http://www.webjump.com.br)
 * @license     http://www.webjump.com.br Copyright
 * @link        http://www.webjump.com.br
 */

declare(strict_types=1);

namespace Webjump\Topico24\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Custom command class
 *
 */
class MyCommand extends Command
{
    /**
     * @const TEXT
     */
    const TEXT = 'text';

    /**
     * The configure method from command class
     *
     * @inheritDoc
     *
     * @return void
     */
    protected function configure()
    {
        $this->setName('my:command');
        $this->setDescription('This is my first console command.');
        $this->addOption(
            self::TEXT,
            null,
            InputOption::VALUE_REQUIRED,
            'Text'
        );

        parent::configure();
    }

    /**
     * Execute the command
     *
     * @param InputInterface $input
     * @param OutputInterface $output
     *
     * @return void
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        if (!$input->getOption(self::TEXT)) {
            $output->writeln('<error>Please enter the Text param</error>');
            return;
        }

        $message = $input->getOption(self::TEXT);
        $output->writeln('<info>Hello World! ' . $message . '</info>');
    }
}
