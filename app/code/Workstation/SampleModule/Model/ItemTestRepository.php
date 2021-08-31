<?php


namespace Workstation\SampleModule\Model;

use Workstation\SampleModule\Api\ItemTestRepositoryInterface;

class ItemTestRepository implements ItemTestRepositoryInterface
{

    private $collectionFactory;
    private $itemFactory;
    private $itemTestFactory;

    public function __construct(
        \Workstation\SampleModule\Model\ResourceModel\ItemTest\CollectionFactory $collectionFactory,
        ItemFactory $itemFactory, ItemTestFactory $itemTestFactory
    )
    {
        $this->collectionFactory = $collectionFactory;
        $this->itemFactory = $itemFactory;
        $this->itemTestFactory = $itemTestFactory;
    }

    public function store()
    {

        $item = $this->itemFactory->create();
        $item->setName('Work');
        $item->setDescription('This is test work');
        $item->setIsObjectNew(true);
        $item->save();

        $itemTest = $this->itemTestFactory->create();
        $itemTest->setDescription('hello magento');
        $itemTest->save();

        return 'success';
    }
}
