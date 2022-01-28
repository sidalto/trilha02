<?php
/**
 * @author      Webjump Develop Team <dev@webjump.com.br>
 * @copyright   2022 Webjump (http://www.webjump.com.br)
 * @license     http://www.webjump.com.br Copyright
 * @link        http://www.webjump.com.br
 */

declare(strict_types=1);

namespace Webjump\Topico32a\Controller\Forward;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\Result\ForwardFactory;
use Magento\Framework\Controller\ResultInterface;

/**
 * Action Controller Forward Type
 *
 */
class Index implements HttpGetActionInterface
{
    /**
     * @var ForwardFactory
     */
    private ForwardFactory $forwardFactory;

    /**
     * Constructor method
     *
     * @param ForwardFactory $forwardFactory
     */
    public function __construct(ForwardFactory $forwardFactory)
    {
        $this->forwardFactory = $forwardFactory;
    }

    /**
     * Execute method from forward controller
     *
     * @return ResponseInterface|ResultInterface|ForwardFactory
     */
    public function execute()
    {
        $forward = $this->forwardFactory->create();

        return $forward
                ->setModule('example')
                ->setController('page')
                ->forward('index');
    }
}
