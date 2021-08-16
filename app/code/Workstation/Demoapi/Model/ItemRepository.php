<?php


namespace Workstation\Demoapi\Model;


use Magento\Catalog\Model\ResourceModel\Product\CollectionFactory;
use Workstation\Demoapi\Api\ItemRepositoryInterface;

class ItemRepository implements ItemRepositoryInterface
{
    /**
     * @var CollectionFactory
     */
    private $collectionFactory;

    public function __construct(CollectionFactory $collectionFactory)
    {
        $this->collectionFactory = $collectionFactory;
    }

    public function getList()
    {
        return $this->collectionFactory->create()->getItems();
    }
}
