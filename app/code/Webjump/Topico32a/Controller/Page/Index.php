<?php
/**
 * @author      Webjump Develop Team <dev@webjump.com.br>
 * @copyright   2022 Webjump (http://www.webjump.com.br)
 * @license     http://www.webjump.com.br Copyright
 * @link        http://www.webjump.com.br
 */

declare(strict_types=1);

namespace Webjump\Topico32a\Controller\Page;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\View\Result\Page;
use Magento\Framework\View\Result\PageFactory;

/**
 * Action Controller Page Type
 *
 */
class Index implements HttpGetActionInterface
{
    /**
     * @var PageFactory
     */
    private PageFactory $pageFactory;

    /**
     * Constructor method
     *
     * @param PageFactory $pageFactory
     */
    public function __construct(PageFactory $pageFactory)
    {
        $this->pageFactory = $pageFactory;
    }

    /**
     * Execute method from page controller
     *
     * @return ResponseInterface|ResultInterface|Page
     */
    public function execute()
    {
        $page = $this->pageFactory->create();
        $title = $page->getConfig()->getTitle();
        $title->set('Retorno do tipo Page');

        return $page;
    }
}
