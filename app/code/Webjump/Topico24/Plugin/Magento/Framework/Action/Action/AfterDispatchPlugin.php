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
use Psr\Log\LoggerInterface;
use Webjump\Topico24\Logger\DebugLogger;
use Webjump\Topico24\Logger\CriticalLogger;

/**
 * After Dispatch plugin class
 *
 */
class AfterDispatchPlugin
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
     * After method of the plugin
     *
     * @param Action $subject
     * @param $result
     * @return mixed
     */
    public function afterDispatch(Action $subject, $result)
    {
        $this->logger->debug('Log do Método After do Plugin');
        $this->pluginDebugLogger->debug('Log de DEBUG personalizado do Método After do Plugin');
        $this->pluginCriticalLogger->critical('Log de CRITICAL personalizado do Método After do Plugin');

        return $result;
    }
}
