<?php
/**
 * @author      Webjump Develop Team <dev@webjump.com.br>
 * @copyright   2022 Webjump (http://www.webjump.com.br)
 * @license     http://www.webjump.com.br Copyright
 * @link        http://www.webjump.com.br
 */

declare(strict_types=1);

namespace Webjump\Topico52\Api\Data;

interface PetInterface
{
    /**
     * @const ENTITY_ID
     */
    const ENTITY_ID = 'entity_id';

    /**
     * @const PET_NAME
     */
    const PET_NAME = 'pet_name';

    /**
     * @const PET_OWNER
     */
    const PET_OWNER = 'pet_owner';

    /**
     * @const OWNER_TELEPHONE
     */
    const OWNER_TELEPHONE = 'owner_telephone';

    /**
     * @const OWNER_ID
     */
    const OWNER_ID = 'owner_id';

    /**
     * Get ID from pet entity
     *
     * @return int
     */
    public function getEntityId(): int;

    /**
     * Get the pet name from entity
     *
     * @return string
     */
    public function getPetName(): string;

    /**
     * Set the pet name
     *
     * @param string $petName
     * @return void
     */
    public function setPetName(string $petName): void;

    /**
     * Get the pet owner name
     *
     * @return string
     */
    public function getPetOwner(): string;

    /**
     * Set the pet owner name
     *
     * @param string $petOwner
     * @return void
     */
    public function setPetOwner(string $petOwner): void;

    /**
     * Get the owner telephone from pet entity
     *
     * @return string
     */
    public function getOwnerTelephone(): string;

    /**
     * Set the pet owner telephone
     *
     * @param string $telephone
     * @return void
     */
    public function setOwnerTelephone(string $telephone): void;

    /**
     * Get pet owner ID from pet entity
     *
     * @return int
     */
    public function getOwnerId(): int;

    /**
     * Set the pet owner ID from pet entity
     *
     * @param int $id
     * @return void
     */
    public function setOwnerId(int $id): void;
}
