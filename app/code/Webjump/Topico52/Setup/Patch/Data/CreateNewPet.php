<?php
/**
 * @author      Webjump Develop Team <dev@webjump.com.br>
 * @copyright   2022 Webjump (http://www.webjump.com.br)
 * @license     http://www.webjump.com.br Copyright
 * @link        http://www.webjump.com.br
 */

declare(strict_types=1);

namespace Webjump\Topico52\Setup\Patch\Data;

use Magento\Framework\Setup\Patch\DataPatchInterface;
use Webjump\Topico52\Api\PetRepositoryInterface;
use Webjump\Topico52\Api\Data\PetInterfaceFactory;

class CreateNewPet implements DataPatchInterface
{
    /**
     * @var PetInterfaceFactory
     */
    protected PetInterfaceFactory $petFactory;

    /**
     * @var PetRepositoryInterface
     */
    protected PetRepositoryInterface $petRepositoryInterface;

    /**
     * CreateNewPet constructor
     *
     * @param PetInterfaceFactory $petFactory
     * @param PetRepositoryInterface $petRepositoryInterface
     */
    public function __construct(
        PetInterfaceFactory $petFactory,
        PetRepositoryInterface $petRepositoryInterface
    ) {
        $this->petFactory = $petFactory;
        $this->petRepositoryInterface = $petRepositoryInterface;
    }

    /**
     * Get dependencies method
     *
     * @return array|string[]
     */
    public static function getDependencies()
    {
        return [];
    }

    /**
     * Get aliases method
     *
     * @return string[]|void
     */
    public function getAliases()
    {
        return [];
    }

    /**
     * The apply method
     *
     * @return void
     */
    public function apply()
    {
        $pet1 = $this->petFactory->create();

        $pet1->setOwnerId(1);
        $pet1->setOwnerTelephone('(11) 11111-2222');
        $pet1->setPetName('Totó');
        $pet1->setPetOwner('Webjump');
        $this->petRepositoryInterface->save($pet1);

        $pet2 = $this->petFactory->create();

        $pet2->setOwnerId(1);
        $pet2->setOwnerTelephone('(11) 22222-3333');
        $pet2->setPetName('Bob');
        $pet2->setPetOwner('Webjump');
        $this->petRepositoryInterface->save($pet2);

        $pet3 = $this->petFactory->create();

        $pet3->setOwnerId(1);
        $pet3->setOwnerTelephone('(11) 11111-2222');
        $pet3->setPetName('Lulu');
        $pet3->setPetOwner('Webjump');
        $this->petRepositoryInterface->save($pet3);
    }
}
