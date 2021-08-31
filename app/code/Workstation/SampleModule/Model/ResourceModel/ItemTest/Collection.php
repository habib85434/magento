<?php


namespace Workstation\SampleModule\Model\ResourceModel\ItemTest;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Workstation\SampleModule\Model\ItemTest;
use Workstation\SampleModule\Model\ResourceModel\ItemTest as ItemTestResource;

class Collection extends AbstractCollection
{
    protected $_idFieldName = 'id';

    protected function _construct()
    {
        $this->_init(ItemTest::class, ItemTestResource::class);
    }
}
