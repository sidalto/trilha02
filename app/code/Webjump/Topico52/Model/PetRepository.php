<?php
/**
 * @author      Webjump Develop Team <dev@webjump.com.br>
 * @copyright   2022 Webjump (http://www.webjump.com.br)
 * @license     http://www.webjump.com.br Copyright
 * @link        http://www.webjump.com.br
 */

declare(strict_types=1);

namespace Webjump\Topico52\Model;

use Exception;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\NoSuchEntityException;
use Webjump\Topico52\Api\Data\PetInterface;
use Webjump\Topico52\Api\Data\PetInterfaceFactory;
use Webjump\Topico52\Api\PetRepositoryInterface;
use Webjump\Topico52\Model\ResourceModel\Pet as PetResourceModel;
use Webjump\Topico52\Model\ResourceModel\Pet\CollectionFactory;

class PetRepository implements PetRepositoryInterface
{
    /**
     * @var PetInterfaceFactory
     */
    private PetInterfaceFactory $petInterfaceFactory;

    /**
     * @var PetResourceModel
     */
    private PetResourceModel $petResourceModel;

    /**
     * @var CollectionFactory
     */
    private CollectionFactory $collectionFactory;

    /**
     * @param PetInterfaceFactory $petInterfaceFactory
     * @param PetResourceModel $petResourceModel
     * @param CollectionFactory $collectionFactory
     */
    public function __construct(
        PetInterfaceFactory $petInterfaceFactory,
        PetResourceModel $petResourceModel,
        CollectionFactory $collectionFactory
    ) {
        $this->petInterfaceFactory = $petInterfaceFactory;
        $this->petResourceModel = $petResourceModel;
        $this->collectionFactory = $collectionFactory;
    }

    /**
     * Save the pet entity
     *
     * @param PetInterface $petInterface
     * @return int
     * @throws CouldNotSaveException
     */
    public function save(PetInterface $petInterface): int
    {
        try {
            $this->petResourceModel->save($petInterface);

            return $petInterface->getEntityId();
        } catch (Exception $e) {
            throw new CouldNotSaveException(__('Could not save pet'));
        }
    }

    /**
     * Get the pet by ID
     *
     * @param int $id
     * @return PetInterface
     * @throws NoSuchEntityException
     */
    public function getById(int $id): PetInterface
    {
        try {
            $pet = $this->petInterfaceFactory->create();
            $this->petResourceModel->load($pet, $id);

            return $pet;
        } catch (Exception $e) {
            throw new NoSuchEntityException(__('This pet don\'t exist'));
        }
    }

    /**
     * Get the list of the pet entities
     *
     * @return array|CollectionFactory[]
     */
    public function getList(): array
    {
        $collection = $this->collectionFactory->create();

        return $collection->getItems();
    }
}

