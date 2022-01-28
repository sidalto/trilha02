<?php
/**
 * @author      Webjump Develop Team <dev@webjump.com.br>
 * @copyright   2022 Webjump (http://www.webjump.com.br)
 * @license     http://www.webjump.com.br Copyright
 * @link        http://www.webjump.com.br
 */

declare(strict_types=1);

namespace Webjump\Topico32b\Model;

use Webjump\Topico32b\Api\WebApiExampleInterface;

/**
 * WebApi class from get and post endpoint type
 *
 */
class WebApiExample implements WebApiExampleInterface
{
    /**
     * Get type method from webapi endpoint
     *
     * @param string $param
     * @return array
     */
    public function getParamWebApi(string $param)
    {
        return [['message' => 'success webapi: ' . $param]];
    }

    /**
     * Post type method from webapi endpoint
     *
     * @param string $name
     * @return array
     */
    public function postWebApi(string $name)
    {
        return [['message' => 'success webapi: ' . $name]];
    }
}
