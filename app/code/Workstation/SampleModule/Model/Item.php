<?php

namespace Workstation\SampleModule\Model;

use Magento\Framework\Model\AbstractModel;

class Item extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(\Workstation\SampleModule\Model\ResourceModel\Item::class);
    }
}
