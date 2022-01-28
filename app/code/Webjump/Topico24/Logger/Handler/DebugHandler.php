<?php
/**
 * @author      Webjump Develop Team <dev@webjump.com.br>
 * @copyright   2022 Webjump (http://www.webjump.com.br)
 * @license     http://www.webjump.com.br Copyright
 * @link        http://www.webjump.com.br
 */

declare(strict_types=1);

namespace Webjump\Topico24\Logger\Handler;

use Magento\Framework\Logger\Handler\Base;
use Monolog\Logger;

/**
 * Debug handle class
 *
 */
class DebugHandler extends Base
{
    /**
     * @var int
     */
    protected $loggerType = Logger::DEBUG;

    /**
     * @var string
     */
    protected $fileName = '/var/log/custom-debug.log';
}
