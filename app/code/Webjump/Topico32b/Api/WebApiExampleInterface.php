<?php
/**
 * @author      Webjump Develop Team <dev@webjump.com.br>
 * @copyright   2022 Webjump (http://www.webjump.com.br)
 * @license     http://www.webjump.com.br Copyright
 * @link        http://www.webjump.com.br
 */

declare(strict_types=1);

namespace Webjump\Topico32b\Api;

use Magento\Framework\Webapi\Rest\Response\Renderer\Json;
use Magento\Framework\Webapi\Rest\Request;

interface WebApiExampleInterface
{
    /**
     * GET type from webapi endpoint
     *
     * @param string $param
     * @return array
     */
    public function getParamWebApi(string $param);

    /**
     * Post method from webapi endpoint
     *
     * @param string $name
     * @return array
     */
    public function postWebApi(string $name);
}
