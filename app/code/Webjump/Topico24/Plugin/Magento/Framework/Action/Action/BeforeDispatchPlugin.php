<?php
/**
 * @author      Webjump Develop Team <dev@webjump.com.br>
 * @copyright   2022 Webjump (http://www.webjump.com.br)
 * @license     http://www.webjump.com.br Copyright
 * @link        http://www.webjump.com.br
 */

declare(strict_types=1);

namespace Webjump\Topico24\Plugin\Magento\Framework\Action\Action;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\RequestInterface;
use Psr\Log\LoggerInterface;
use Webjump\Topico24\Logger\DebugLogger;
use Webjump\Topico24\Logger\CriticalLogger;

/**
 * Before Dispatch plugin class
 *
 */
class BeforeDispatchPlugin
{
    /**
     * @var LoggerInterface
     */
    private LoggerInterface $logger;

    /**
     * @var CriticalLogger
     */
    private CriticalLogger $pluginCriticalLogger;

    /**
     * @var DebugLogger
     */
    private DebugLogger $pluginDebugLogger;

    /**
     * Constructor method
     *
     * @param LoggerInterface $logger
     * @param CriticalLogger $pluginCriticalLogger
     * @param DebugLogger $pluginDebugLogger
     */
    public function __construct(
        LoggerInterface $logger,
        CriticalLogger $pluginCriticalLogger,
        DebugLogger $pluginDebugLogger
    ) {
        $this->logger = $logger;
        $this->pluginCriticalLogger = $pluginCriticalLogger;
        $this->pluginDebugLogger = $pluginDebugLogger;
    }

    /**
     * Before method of the plugin
     *
     * @param Action $subject
     * @param RequestInterface $request
     * @return null
     */
    public function beforeDispatch(Action $subject, RequestInterface $request)
    {
        $this->logger->debug('Log do Método Before do Plugin');
        $this->pluginDebugLogger->debug('Log de DEBUG personalizado do Método Before do Plugin');
        $this->pluginCriticalLogger->critical('Log de CRITICAL personalizado do Método Before do Plugin');

        return null;
    }
}
