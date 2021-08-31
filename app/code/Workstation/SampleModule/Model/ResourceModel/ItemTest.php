<?php


namespace Workstation\SampleModule\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;


class ItemTest extends AbstractDb
{

    protected function _construct()
    {
        $this->_init('workstation_sample_item_test', 'id');
    }

}
