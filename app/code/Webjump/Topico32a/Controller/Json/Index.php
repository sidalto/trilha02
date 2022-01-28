<?php
/**
 * @author      Webjump Develop Team <dev@webjump.com.br>
 * @copyright   2022 Webjump (http://www.webjump.com.br)
 * @license     http://www.webjump.com.br Copyright
 * @link        http://www.webjump.com.br
 */

declare(strict_types=1);

namespace Webjump\Topico32a\Controller\Json;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\Result\Json;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\Controller\Result\JsonFactory;

/**
 * Action Controller Json Type
 *
 */
class Index implements HttpGetActionInterface
{
    /**
     * @var JsonFactory
     */
    private JsonFactory $jsonFactory;

    /**
     * Constructor method
     *
     * @param JsonFactory $jsonFactory
     */
    public function __construct(JsonFactory $jsonFactory)
    {
        $this->jsonFactory = $jsonFactory;
    }

    /**
     * Execute method from json controller
     *
     * @return ResponseInterface|ResultInterface|Json
     */
    public function execute()
    {
        $json = $this->jsonFactory->create();

        return $json
                ->setHeader('Content-Type', 'application/json')
                ->setData([
                    'firstName' => 'Sidalto',
                    'lastName' => 'Pereira'
                ]);
    }
}
