<?php
/**
 * @author      Webjump Develop Team <dev@webjump.com.br>
 * @copyright   2022 Webjump (http://www.webjump.com.br)
 * @license     http://www.webjump.com.br Copyright
 * @link        http://www.webjump.com.br
 */

declare(strict_types=1);

namespace Webjump\Topico24\Cron;

use Psr\Log\LoggerInterface;

/**
 * Cron class from log
 *
 */
class CronLog
{
    /**
     * @var LoggerInterface
     */
    private LoggerInterface $logger;

    /**
     * Constructor method
     *
     * @param LoggerInterface $logger
     */
    public function __construct(LoggerInterface $logger) {
        $this->logger = $logger;
    }

    /**
     * Write to system.log
     *
     * @return void
     */
    public function execute() {
        $this->logger->info('Log da Cron rodando');
    }
}
