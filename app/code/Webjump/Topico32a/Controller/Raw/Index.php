<?php
/**
 * @author      Webjump Develop Team <dev@webjump.com.br>
 * @copyright   2022 Webjump (http://www.webjump.com.br)
 * @license     http://www.webjump.com.br Copyright
 * @link        http://www.webjump.com.br
 */

declare(strict_types=1);

namespace Webjump\Topico32a\Controller\Raw;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\Result\Raw;
use Magento\Framework\Controller\Result\RawFactory;

/**
 * Action Controller Raw Type
 *
 */
class Index implements HttpGetActionInterface
{
    /**
     * @var RawFactory
     */
    private RawFactory $rawFactory;

    public function __construct(RawFactory $rawFactory)
    {
        $this->rawFactory = $rawFactory;
    }

    /**
     * Execute method from raw controller
     *
     * @return Raw
     */
    public function execute()
    {
        $raw = $this->rawFactory->create();

        return $raw->setContents('Retorno do tipo Raw');
    }
}
