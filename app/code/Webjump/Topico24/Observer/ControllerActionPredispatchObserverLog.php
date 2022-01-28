<?php
/**
 * @author      Webjump Develop Team <dev@webjump.com.br>
 * @copyright   2022 Webjump (http://www.webjump.com.br)
 * @license     http://www.webjump.com.br Copyright
 * @link        http://www.webjump.com.br
 */

declare(strict_types=1);

namespace Webjump\Topico24\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Psr\Log\LoggerInterface;

/**
 * Observer log class
 *
 */
class ControllerActionPredispatchObserverLog implements ObserverInterface
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
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * Execute method from observer
     *
     * @inheritDoc
     *
     * @param Observer $observer
     * @return void
     */
    public function execute(Observer $observer)
    {
        $this->logger->info('Log de disparo do evento controller_action_predispatch por meio de um Observer');
    }
}
