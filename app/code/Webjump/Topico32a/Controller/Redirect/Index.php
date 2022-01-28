<?php
/**
 * @author      Webjump Develop Team <dev@webjump.com.br>
 * @copyright   2022 Webjump (http://www.webjump.com.br)
 * @license     http://www.webjump.com.br Copyright
 * @link        http://www.webjump.com.br
 */

declare(strict_types=1);

namespace Webjump\Topico32a\Controller\Redirect;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\Result\RedirectFactory;
use Magento\Framework\Controller\ResultInterface;

/**
 * Action Controller Redirect Type
 *
 */
class Index implements HttpGetActionInterface
{
    /**
     * @var RedirectFactory
     */
    private RedirectFactory $redirectFactory;

    /**
     * Constructor method
     *
     * @param RedirectFactory $redirectFactory
     */
    public function __construct(RedirectFactory $redirectFactory)
    {
        $this->redirectFactory = $redirectFactory;
    }

    /**
     * Execute method from redirect controller
     *
     * @return ResponseInterface|ResultInterface|RedirectFactory
     */
    public function execute()
    {
        $redirect = $this->redirectFactory->create();

        return $redirect->setUrl('/example/page/index');
    }
}
