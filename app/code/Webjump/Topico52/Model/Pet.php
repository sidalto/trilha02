<?php
/**
 * @author      Webjump Develop Team <dev@webjump.com.br>
 * @copyright   2022 Webjump (http://www.webjump.com.br)
 * @license     http://www.webjump.com.br Copyright
 * @link        http://www.webjump.com.br
 */

declare(strict_types=1);

namespace Webjump\Topico52\Model;

use Magento\Framework\Model\AbstractModel;
use Webjump\Topico52\Api\Data\PetInterface;
use Webjump\Topico52\Model\ResourceModel\Pet as ResourceModel;

class Pet extends AbstractModel implements PetInterface
{
    /**
     * Construct method from Pet Model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(ResourceModel::class);
    }

    /**
     * Get the entity ID from a pet
     *
     * @return int
     */
    public function getEntityId(): int
    {
        return (int)$this->getData(self::ENTITY_ID);
    }

    /**
     * Get the pet name
     *
     * @return string
     */
    public function getPetName(): string
    {
        return $this->getData(self::PET_NAME);
    }

    /**
     * Get the owner name from a pet
     *
     * @return string
     */
    public function getPetOwner(): string
    {
        return $this->getData(self::PET_OWNER);
    }

    /**
     * Get the owner telephone from a pet
     *
     * @return string
     */
    public function getOwnerTelephone(): string
    {
        return $this->getData(self::OWNER_TELEPHONE);
    }

    /**
     * Get the owner ID from a pet
     *
     * @return int
     */
    public function getOwnerId(): int
    {
        return (int)$this->getData(self::OWNER_ID);
    }

    /**
     * Set the pet name
     *
     * @param string $petName
     * @return void
     */
    public function setPetName(string $petName): void
    {
        $this->setData(self::PET_NAME, $petName);
    }

    /**
     * Set the pet owner name
     *
     * @param string $petOwner
     * @return void
     */
    public function setPetOwner(string $petOwner): void
    {
        $this->setData(self::PET_OWNER, $petOwner);
    }

    /**
     * Set the pet owner telephone
     *
     * @param string $telephone
     * @return void
     */
    public function setOwnerTelephone(string $telephone): void
    {
        $this->setData(self::OWNER_TELEPHONE, $telephone);
    }

    /**
     * Set the pet owner ID
     *
     * @param int $id
     * @return void
     */
    public function setOwnerId(int $id): void
    {
        $this->setData(self::OWNER_ID, $id);
    }
}
