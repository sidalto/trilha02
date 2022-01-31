<?php
/**
 * @author      Webjump Develop Team <dev@webjump.com.br>
 * @copyright   2022 Webjump (http://www.webjump.com.br)
 * @license     http://www.webjump.com.br Copyright
 * @link        http://www.webjump.com.br
 */

declare(strict_types=1);

namespace Webjump\Topico52\Api;

use Webjump\Topico52\Api\Data\PetInterface;
use Webjump\Topico52\Model\ResourceModel\Pet\CollectionFactory;

interface PetRepositoryInterface
{
    /**
     * Save the pet entity
     *
     * @param PetInterface $petInterface
     * @return int
     */
    public function save(PetInterface $petInterface): int;

    /**
     * Get the pet by ID
     *
     * @param int $id
     * @return PetInterface
     */
    public function getById(int $id): PetInterface;

    /**
     * Get the list of the pet entities
     *
     * @return CollectionFactory[]
     */
    public function getList(): array;
}
